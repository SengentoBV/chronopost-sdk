<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Services;

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
     * Method to call the operation originally named getReservedSkybillWithType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithType $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeResponse|bool
     */
    public function getReservedSkybillWithType(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithType $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithType = $this->getSoapClient()->__soapCall('getReservedSkybillWithType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybillWithType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeAuth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeAuth $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeAuthResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeAuth(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeAuth $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndModeAuth = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndModeAuth', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybillWithTypeAndModeAuth;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeByReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeByReservation $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeByReservationResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeByReservation(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeByReservation $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndModeByReservation = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndModeByReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybillWithTypeAndModeByReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReservedSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybill $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillResponse|bool
     */
    public function getReservedSkybill(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybill $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybill = $this->getSoapClient()->__soapCall('getReservedSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReservedSkybillWithTypeAndMode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndMode $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeResponse|bool
     */
    public function getReservedSkybillWithTypeAndMode(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndMode $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndMode = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndMode', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReservedSkybillWithTypeAndMode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShippingInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetShippingInformation $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetShippingInformationResponse|bool
     */
    public function getShippingInformation(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetShippingInformation $parameters)
    {
        try {
            $this->setResult($resultGetShippingInformation = $this->getSoapClient()->__soapCall('getShippingInformation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShippingInformation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRouting
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRoutingResponse|bool
     */
    public function getRouting(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting $parameters)
    {
        try {
            $this->setResult($resultGetRouting = $this->getSoapClient()->__soapCall('getRouting', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRouting;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeAuthResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeByReservationResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRoutingResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetShippingInformationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
