<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Confirm Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiConfirm extends AbstractSoapClientBase
{
    /**
     * Sets the AccountNumber SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $accountNumber
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiConfirm
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
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiConfirm
     */
    public function setSoapHeaderPassword(string $password, string $namespace = 'http://cxf.soap.ws.creneau.chronopost.fr/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'password', $password, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named confirmDeliverySlotV2
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: accountNumber, password
     * - SOAPHeaderNamespaces: http://cxf.soap.ws.creneau.chronopost.fr/, http://cxf.soap.ws.creneau.chronopost.fr/
     * - SOAPHeaderTypes: string, string
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlotV2 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlotV2Response|bool
     */
    public function confirmDeliverySlotV2(\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlotV2 $parameters)
    {
        try {
            $this->setResult($resultConfirmDeliverySlotV2 = $this->getSoapClient()->__soapCall('confirmDeliverySlotV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConfirmDeliverySlotV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named confirmDeliverySlot
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: accountNumber, password
     * - SOAPHeaderNamespaces: http://cxf.soap.ws.creneau.chronopost.fr/, http://cxf.soap.ws.creneau.chronopost.fr/
     * - SOAPHeaderTypes: string, string
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlotResponse|bool
     */
    public function confirmDeliverySlot(\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot $parameters)
    {
        try {
            $this->setResult($resultConfirmDeliverySlot = $this->getSoapClient()->__soapCall('confirmDeliverySlot', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConfirmDeliverySlot;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlotResponse|\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlotV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
