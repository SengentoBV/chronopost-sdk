<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateProductsResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:calculateProductsResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiCalculateProductsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts $return = null;
    /**
     * Constructor method for calculateProductsResponse
     * @uses ChronoApiCalculateProductsResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts $return
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateProductsResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
