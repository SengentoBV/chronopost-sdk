<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Creer Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiCreer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named creerEnlevementNational
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNationalResponse|bool
     */
    public function creerEnlevementNational(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementNational = $this->getSoapClient()->__soapCall('creerEnlevementNational', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreerEnlevementNational;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named creerEnlevementEurope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEuropeResponse|bool
     */
    public function creerEnlevementEurope(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementEurope = $this->getSoapClient()->__soapCall('creerEnlevementEurope', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreerEnlevementEurope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEuropeResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNationalResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
