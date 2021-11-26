<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Calculate Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiCalculate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named calculateDeliveryTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTimeResponse|bool
     */
    public function calculateDeliveryTime(\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime $parameters)
    {
        try {
            $this->setResult($resultCalculateDeliveryTime = $this->getSoapClient()->__soapCall('calculateDeliveryTime', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateDeliveryTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named calculateProducts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateProducts $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateProductsResponse|bool
     */
    public function calculateProducts(\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateProducts $parameters)
    {
        try {
            $this->setResult($resultCalculateProducts = $this->getSoapClient()->__soapCall('calculateProducts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateProducts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTimeResponse|\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateProductsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
