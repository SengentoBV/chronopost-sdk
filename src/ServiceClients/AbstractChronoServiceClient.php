<?php

namespace SengentoBV\ChronopostSdk\ServiceClients;

use Exception;
use ReflectionMethod;
use SengentoBV\ChronopostSdk\ChronoApiClient;
use SengentoBV\ChronopostSdk\ChronoAuthenticationInterface;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;
use SengentoBV\ChronopostSdk\Exceptions\ChronoSoapFaultException;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\PackageBase\AbstractStructBase;

abstract class AbstractChronoServiceClient
{
    /**
     * @var ChronoApiClient
     */
    private ChronoApiClient $apiClient;

    public function __construct(ChronoApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient() : ChronoApiClient
    {
        return $this->apiClient;
    }

    /**
     * @param AbstractSoapClientBase $serviceClient
     * @param array $requestArguments
     * @param string $requestFunction
     * @param array $arguments
     * @param string|null $functionName
     * @param bool $applyAuthentication
     * @return mixed
     * @throws ChronoException
     * @throws ChronoSoapFaultException
     */
    protected function executeServiceRequest(AbstractSoapClientBase $serviceClient, array $requestArguments, string $requestFunction, array $arguments, ?string $functionName = null, bool $applyAuthentication = true)
    {
        $functionName = $functionName ?? debug_backtrace()[1]['function'];

        $fault = null;
        $result = false;

        if ($applyAuthentication && ($authentication = $this->getApiClient()->getAuthentication()) === null) {
            $fault = new SoapFault('INTERNAL_AUTHENTICATION_NOT_SET', 'Authentication not set.');
        }

        if ($fault === null) {

            if ($applyAuthentication && isset($authentication)) {
                // Go over the request arguments and modify where needed
                foreach ($requestArguments as $requestArgument) {
                    if (!$requestArgument instanceof AbstractStructBase) {
                        // We can only 'patch' instances extending AbstractStructBase
                        continue;
                    }

                    // Apply authentication, updating credentials stored in the request argument(s) automatically
                    $this->applyAuthentication($serviceClient, $requestArgument, $authentication);
                }
            }

            // Call the API
            $result = $serviceClient->$requestFunction(...$requestArguments);

            if (property_exists($result, 'errorCode') && property_exists($result, 'errorMessage') && $result->getErrorCode() > 0) {
                $fault = new SoapFault('CHRONO_ERR' . $result->errorCode, "Request failed: {$result->errorMessage} [{$result->errorCode}]");
                $result = false;
                $fault->detail = json_encode($result);
            } else if (method_exists($result, 'getReturn')) {
                $realResult = $result->getReturn();

                if (property_exists($realResult, 'errorCode') && property_exists($realResult, 'errorMessage') && $realResult->getErrorCode() > 0) {
                    $fault = new SoapFault('CHRONO_ERR' . $realResult->getErrorCode(), "Request failed: {$realResult->getErrorMessage()} [{$realResult->getErrorCode()}]");
                    $result = false;
                    $fault->detail = json_encode($realResult);
                }
            }
        }

        if ($result === false) {
            $fault = $fault ?? $serviceClient->getLastErrorForMethod(get_class($serviceClient) . '::' . $requestFunction);

            try {
                if ($this->getApiClient()->getFaultHandler()->tryRecover($this, $functionName, $fault)) {

                    return $this->$functionName(...$arguments);
                }
            } catch (ChronoException $chronoException) {
                throw $chronoException;
            } catch (Exception $exception) {
                throw new ChronoException(null, null, $exception);
            }

            throw new ChronoSoapFaultException($fault);
        }

        return $result;
    }

    private function applyAuthentication(AbstractSoapClientBase $soapClient, AbstractStructBase $object, ChronoAuthenticationInterface $authentication, array &$loopPreventionCache = [])
    {
        if (in_array($object, $loopPreventionCache, true)) {
            return;
        }

        $loopPreventionCache[] = $object;

        // Check for method 'setSoapHeaderAccountNumber' and call it if it exists
        if (method_exists($soapClient, 'setSoapHeaderAccountNumber')) {
            $soapClient->setSoapHeaderAccountNumber(($accountNumber = $authentication->getAccountNumber()) === null ? '' : (string)$accountNumber);
        }
        // Check for method 'setSoapHeaderPassword' and call it if it exists
        if (method_exists($soapClient, 'setSoapHeaderPassword')) {
            $soapClient->setSoapHeaderPassword($authentication->getPassword() ?? '');
        }

        // Check for method 'setPassword' and call it if it exists
        if (method_exists($object, 'setPassword')) {
            $object->setPassword($authentication->getPassword());
        }
        // Check for method 'setAccountNumber' and call it if it exists after checking what version to use (int or string)
        if (method_exists($object, 'setAccountNumber')) {

            $reflectedMethod = new ReflectionMethod($object, 'setAccountNumber');
            $isString = $reflectedMethod->getParameters()[0]->getType()->getName() === 'string';
            $object->setAccountNumber((($accountNumber = $authentication->getAccountNumber()) !== null && $isString) ? (string)$accountNumber : $accountNumber);
        }

        // Check for method 'setSubAccount' and call it if it exists after checking what version to use (int or string)
        if (method_exists($object, 'setSubAccount')) {

            $reflectedMethod = new ReflectionMethod($object, 'setSubAccount');
            $isString = $reflectedMethod->getParameters()[0]->getType()->getName() === 'string';
            $object->setSubAccount(($isString && ($subAccount = $authentication->getSubAccount()) !== null) ? (string)$subAccount : $subAccount);
        }

        if (method_exists($object, 'getHeaderValue') && method_exists($object, 'setHeaderValue')) {

            /** @var ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $existingValue */
            $existingValue = $object->getHeaderValue();

            if ($existingValue === null) {

                // We need to figure out the correct type
                $reflectedMethod = new ReflectionMethod($object, 'setHeaderValue');
                $reflectedClass = $reflectedMethod->getParameters()[0]->getType()->getName();

                if (is_subclass_of($reflectedClass, AbstractStructBase::class)) {
                    // Create a new instance
                    $existingValue = new $reflectedClass();

                    // And store it
                    $object->setHeaderValue($existingValue);
                }
            }

            if ($existingValue instanceof AbstractStructBase) {
                // At this point we have a value, and we can call our recursive applyAuthentication on it
                $this->applyAuthentication($soapClient, $existingValue, $authentication, $loopPreventionCache);
            }
        }

        // Final step: Take all properties (that is what jsonSerialize does) and repeat the process for each AbstractStructBase instance
        // The 'loopPreventionCache' array is to keep track of objects already processed, to prevent endless loops
        foreach ($object->jsonSerialize() as $propertyValue) {
            if ($propertyValue instanceof AbstractStructBase) {
                $this->applyAuthentication($soapClient, $propertyValue, $authentication, $loopPreventionCache);
            }
        }
    }
}
