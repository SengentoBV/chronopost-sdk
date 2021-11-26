<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateDeliveryTimeResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:calculateDeliveryTimeResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiCalculateDeliveryTimeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateDeliveryTime|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateDeliveryTime $return = null;
    /**
     * Constructor method for calculateDeliveryTimeResponse
     * @uses ChronoApiCalculateDeliveryTimeResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateDeliveryTime $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateDeliveryTime $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateDeliveryTime|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateDeliveryTime
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateDeliveryTime $return
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTimeResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateDeliveryTime $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
