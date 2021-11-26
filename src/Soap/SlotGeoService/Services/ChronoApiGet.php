<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiGet extends AbstractSoapClientBase
{
    /**
     * Sets the AccountNumber SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $accountNumber
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiGet
     */
    public function setSoapHeaderAccountNumber(string $accountNumber, string $namespace = 'http://cxf.soap.ws.creneau.chronopost.fr/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'accountNumber', $accountNumber, $mustUnderstand, $actor);
    }
    /**
     * Sets the Password SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $password
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiGet
     */
    public function setSoapHeaderPassword(string $password, string $namespace = 'http://cxf.soap.ws.creneau.chronopost.fr/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'password', $password, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getAdresseGeocodage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: accountNumber, password
     * - SOAPHeaderNamespaces: http://cxf.soap.ws.creneau.chronopost.fr/, http://cxf.soap.ws.creneau.chronopost.fr/
     * - SOAPHeaderTypes: string, string
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodage $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodageResponse|bool
     */
    public function getAdresseGeocodage(\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodage $parameters)
    {
        try {
            $this->setResult($resultGetAdresseGeocodage = $this->getSoapClient()->__soapCall('getAdresseGeocodage', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAdresseGeocodage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodageResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
