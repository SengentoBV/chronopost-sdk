<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Track Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiTrack extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named trackWithSenderRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackWithSenderRef $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackWithSenderRefResponse|bool
     */
    public function trackWithSenderRef(\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackWithSenderRef $parameters)
    {
        try {
            $this->setResult($resultTrackWithSenderRef = $this->getSoapClient()->__soapCall('trackWithSenderRef', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackWithSenderRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearchResponse|bool
     */
    public function trackSearch(\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch $parameters)
    {
        try {
            $this->setResult($resultTrackSearch = $this->getSoapClient()->__soapCall('trackSearch', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackSearch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSkybillV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybillV2 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybillV2Response|bool
     */
    public function trackSkybillV2(\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybillV2 $parameters)
    {
        try {
            $this->setResult($resultTrackSkybillV2 = $this->getSoapClient()->__soapCall('trackSkybillV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackSkybillV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybill $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybillResponse|bool
     */
    public function trackSkybill(\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybill $parameters)
    {
        try {
            $this->setResult($resultTrackSkybill = $this->getSoapClient()->__soapCall('trackSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearchResponse|\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybillResponse|\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybillV2Response|\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
