<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for quickCostResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:quickCostResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiQuickCostResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2 $return = null;
    /**
     * Constructor method for quickCostResponse
     * @uses ChronoApiQuickCostResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2 $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2 $return
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiQuickCostResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
