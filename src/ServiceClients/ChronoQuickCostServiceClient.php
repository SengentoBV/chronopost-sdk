<?php

namespace SengentoBV\ChronopostSdk\ServiceClients;

use Exception;
use SengentoBV\ChronopostSdk\ChronoApiClient;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;
use SengentoBV\ChronopostSdk\Exceptions\ChronoSoapFaultException;
use SengentoBV\ChronopostSdk\Services\ChronoSoapServiceMap;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Services\ChronoApiCalculate;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Services\ChronoApiQuick;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiQuickCost;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class ChronoQuickCostServiceClient extends AbstractChronoServiceClient
{
    public function __construct(ChronoApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    /**
     * @param ChronoApiQuickCost $input
     * @return ChronoApiResultQuickCostV2
     * @throws ChronoException
     */
    public function quickCost(ChronoApiQuickCost $input): ChronoApiResultQuickCostV2
    {
        $originalCredentials = [$input->getPassword(), $input->getAccountNumber()];

        try {
            $authentication = $this->getApiClient()->getAuthentication();

            // If we got authentication info we'll overwrite the credentials (the values will be restored after the call)
            if ($authentication !== null) {
                $input->setPassword($authentication->getPassword());
                $input->setAccountNumber($authentication->getAccountNumber());
            }

            return $this->executeQuickServiceRequest([$input], 'quickCost', func_get_args(), __FUNCTION__)->getReturn();
        } finally {

            $input->setPassword($originalCredentials[0]);
            $input->setAccountNumber($originalCredentials[1]);
        }
    }


    /**
     * @return ChronoApiCalculate
     * @noinspection PhpUnhandledExceptionInspection
     * @noinspection PhpDocMissingThrowsInspection
     */
    private function getCalculateSoapServiceClient(): AbstractSoapClientBase
    {
        return $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_QUICK_COST_CALCULATE);
    }

    /**
     * @return ChronoApiQuick
     * @noinspection PhpUnhandledExceptionInspection
     * @noinspection PhpDocMissingThrowsInspection
     */
    private function getQuickSoapServiceClient(): AbstractSoapClientBase
    {
        return $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_QUICK_COST_QUICK);
    }

    /**
     * @param array $requestArguments
     * @param string $requestFunction
     * @param array $arguments
     * @param string|null $functionName
     * @return mixed
     * @throws ChronoException
     * @throws ChronoSoapFaultException
     */
    private function executeQuickServiceRequest(array $requestArguments, string $requestFunction, array $arguments, ?string $functionName = null)
    {
        $functionName = $functionName ?? debug_backtrace()[1]['function'];

        $fault = null;
        $result = false;

        $wsdlServiceClient = $this->getQuickSoapServiceClient();

        if ($this->getApiClient()->getAuthentication() === null) {
            $fault = new SoapFault('INTERNAL_AUTHENTICATION_NOT_SET', 'INTERNAL_AUTHENTICATION_NOT_SET');
        }

        if ($fault === null) {
            // Call the API
            $result = $wsdlServiceClient->$requestFunction(...$requestArguments);

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
            $fault = $fault ?? $wsdlServiceClient->getLastErrorForMethod(get_class($wsdlServiceClient) . '::' . $requestFunction);

            try {
                if ($this->getApiClient()->getFaultHandler()->tryRecover($this, $functionName, $fault)) {

                    return $this->$functionName(...$arguments);
                }
            } catch (ChronoException $dpdBeException) {
                throw $dpdBeException;
            } catch (Exception $exception) {
                throw new ChronoException(null, null, $exception);
            }

            throw new ChronoSoapFaultException($fault);
        }

        return $result;
    }
}