<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultQuickCostV2 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultQuickCostV2 extends ChronoApiResultQuickCost
{
    /**
     * The assurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance $assurance = null;
    /**
     * Constructor method for resultQuickCostV2
     * @uses ChronoApiResultQuickCostV2::setAssurance()
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance $assurance
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance $assurance = null)
    {
        $this
            ->setAssurance($assurance);
    }
    /**
     * Get assurance value
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance|null
     */
    public function getAssurance(): ?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance
    {
        return $this->assurance;
    }
    /**
     * Set assurance value
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance $assurance
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2
     */
    public function setAssurance(?\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance $assurance = null): self
    {
        $this->assurance = $assurance;
        
        return $this;
    }
}
