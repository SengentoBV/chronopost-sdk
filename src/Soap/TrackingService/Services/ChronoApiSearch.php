<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiSearch extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named searchPOD
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPOD $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODResponse|bool
     */
    public function searchPOD(\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPOD $parameters)
    {
        try {
            $this->setResult($resultSearchPOD = $this->getSoapClient()->__soapCall('searchPOD', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPOD;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchPODWithSenderRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRef $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRefResponse|bool
     */
    public function searchPODWithSenderRef(\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRef $parameters)
    {
        try {
            $this->setResult($resultSearchPODWithSenderRef = $this->getSoapClient()->__soapCall('searchPODWithSenderRef', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPODWithSenderRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODResponse|\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
