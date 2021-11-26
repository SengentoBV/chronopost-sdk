<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for productServiceV2 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiProductServiceV2 extends ChronoApiProductService
{
    /**
     * The asCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $asCode = null;
    /**
     * Constructor method for productServiceV2
     * @uses ChronoApiProductServiceV2::setAsCode()
     * @param string $asCode
     */
    public function __construct(?string $asCode = null)
    {
        $this
            ->setAsCode($asCode);
    }
    /**
     * Get asCode value
     * @return string|null
     */
    public function getAsCode(): ?string
    {
        return $this->asCode;
    }
    /**
     * Set asCode value
     * @param string $asCode
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductServiceV2
     */
    public function setAsCode(?string $asCode = null): self
    {
        // validation for constraint: string
        if (!is_null($asCode) && !is_string($asCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asCode, true), gettype($asCode)), __LINE__);
        }
        $this->asCode = $asCode;
        
        return $this;
    }
}
