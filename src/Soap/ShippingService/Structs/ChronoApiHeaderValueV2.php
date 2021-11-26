<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for headerValueV2 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiHeaderValueV2 extends ChronoApiHeaderValue
{
    /**
     * The iv4OrderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $iv4OrderId = null;
    /**
     * Constructor method for headerValueV2
     * @uses ChronoApiHeaderValueV2::setIv4OrderId()
     * @param string $iv4OrderId
     */
    public function __construct(?string $iv4OrderId = null)
    {
        $this
            ->setIv4OrderId($iv4OrderId);
    }
    /**
     * Get iv4OrderId value
     * @return string|null
     */
    public function getIv4OrderId(): ?string
    {
        return $this->iv4OrderId;
    }
    /**
     * Set iv4OrderId value
     * @param string $iv4OrderId
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValueV2
     */
    public function setIv4OrderId(?string $iv4OrderId = null): self
    {
        // validation for constraint: string
        if (!is_null($iv4OrderId) && !is_string($iv4OrderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iv4OrderId, true), gettype($iv4OrderId)), __LINE__);
        }
        $this->iv4OrderId = $iv4OrderId;
        
        return $this;
    }
}
