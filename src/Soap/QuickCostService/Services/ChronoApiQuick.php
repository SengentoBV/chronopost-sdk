<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Quick Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiQuick extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named quickCost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiQuickCost $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiQuickCostResponse|bool
     */
    public function quickCost(\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiQuickCost $parameters)
    {
        try {
            $this->setResult($resultQuickCost = $this->getSoapClient()->__soapCall('quickCost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultQuickCost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiQuickCostResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
