<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Shipping Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiShipping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named shippingV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV2 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV2Response|bool
     */
    public function shippingV2(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV2 $parameters)
    {
        try {
            $this->setResult($resultShippingV2 = $this->getSoapClient()->__soapCall('shippingV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV3 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV3Response|bool
     */
    public function shippingV3(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV3 $parameters)
    {
        try {
            $this->setResult($resultShippingV3 = $this->getSoapClient()->__soapCall('shippingV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcel $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelResponse|bool
     */
    public function shippingMultiParcel(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcel $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcel = $this->getSoapClient()->__soapCall('shippingMultiParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnlyV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnlyV2 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnlyV2Response|bool
     */
    public function shippingWithESDOnlyV2(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnlyV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnlyV2 = $this->getSoapClient()->__soapCall('shippingWithESDOnlyV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithESDOnlyV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationV2 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationV2Response|bool
     */
    public function shippingWithReservationV2(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationV2 = $this->getSoapClient()->__soapCall('shippingWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservationV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shipping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipping $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingResponse|bool
     */
    public function shipping(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipping $parameters)
    {
        try {
            $this->setResult($resultShipping = $this->getSoapClient()->__soapCall('shipping', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservation $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationResponse|bool
     */
    public function shippingMultiParcelWithReservation(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservation = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelWithReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV4 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV4Response|bool
     */
    public function shippingMultiParcelV4(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV4 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV4 = $this->getSoapClient()->__soapCall('shippingMultiParcelV4', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV4;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV5 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV5Response|bool
     */
    public function shippingMultiParcelV5(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV5 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV5 = $this->getSoapClient()->__soapCall('shippingMultiParcelV5', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV5;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV3 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV3Response|bool
     */
    public function shippingMultiParcelWithReservationV3(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelWithReservationV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV2 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV2Response|bool
     */
    public function shippingMultiParcelV2(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV6 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV6Response|bool
     */
    public function shippingV6(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV6 $parameters)
    {
        try {
            $this->setResult($resultShippingV6 = $this->getSoapClient()->__soapCall('shippingV6', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV6;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservation $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationResponse|bool
     */
    public function shippingWithReservation(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservation = $this->getSoapClient()->__soapCall('shippingWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV7
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV7 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV7Response|bool
     */
    public function shippingV7(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV7 $parameters)
    {
        try {
            $this->setResult($resultShippingV7 = $this->getSoapClient()->__soapCall('shippingV7', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV7;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClient
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClient $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClient(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClient $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClient = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClient', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservationAndESDWithRefClient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV4 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV4Response|bool
     */
    public function shippingV4(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV4 $parameters)
    {
        try {
            $this->setResult($resultShippingV4 = $this->getSoapClient()->__soapCall('shippingV4', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV4;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV5 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV5Response|bool
     */
    public function shippingV5(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV5 $parameters)
    {
        try {
            $this->setResult($resultShippingV5 = $this->getSoapClient()->__soapCall('shippingV5', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV5;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClientPC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPCResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClientPC(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClientPC = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClientPC', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservationAndESDWithRefClientPC;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2Response|bool
     */
    public function shippingMultiParcelWithReservationV2(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelWithReservationV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnly
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnlyResponse|bool
     */
    public function shippingWithESDOnly(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnly = $this->getSoapClient()->__soapCall('shippingWithESDOnly', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithESDOnly;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV3 $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV3Response|bool
     */
    public function shippingMultiParcelV3(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV2Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV3Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV4Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV5Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV3Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV2Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV3Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV4Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV5Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV6Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV7Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnlyResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnlyV2Response|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPCResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationResponse|\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
