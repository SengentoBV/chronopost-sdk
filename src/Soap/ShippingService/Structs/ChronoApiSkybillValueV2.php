<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillValueV2 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSkybillValueV2 extends ChronoApiSkybillValue
{
    /**
     * The as
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $as = null;
    /**
     * Constructor method for skybillValueV2
     * @uses ChronoApiSkybillValueV2::setAs()
     * @param string $as
     */
    public function __construct(?string $as = null)
    {
        $this
            ->setAs($as);
    }
    /**
     * Get as value
     * @return string|null
     */
    public function getAs(): ?string
    {
        return $this->as;
    }
    /**
     * Set as value
     * @param string $as
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValueV2
     */
    public function setAs(?string $as = null): self
    {
        // validation for constraint: string
        if (!is_null($as) && !is_string($as)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as, true), gettype($as)), __LINE__);
        }
        $this->as = $as;
        
        return $this;
    }
}
