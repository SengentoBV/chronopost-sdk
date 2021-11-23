<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValueV6 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSkybillWithDimensionsValueV6 extends ChronoApiSkybillWithDimensionsValueV5
{
    /**
     * The alternateProductCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $alternateProductCode = null;
    /**
     * The labelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $labelNumber = null;
    /**
     * Constructor method for skybillWithDimensionsValueV6
     * @uses ChronoApiSkybillWithDimensionsValueV6::setAlternateProductCode()
     * @uses ChronoApiSkybillWithDimensionsValueV6::setLabelNumber()
     * @param string $alternateProductCode
     * @param string $labelNumber
     */
    public function __construct(?string $alternateProductCode = null, ?string $labelNumber = null)
    {
        $this
            ->setAlternateProductCode($alternateProductCode)
            ->setLabelNumber($labelNumber);
    }
    /**
     * Get alternateProductCode value
     * @return string|null
     */
    public function getAlternateProductCode(): ?string
    {
        return $this->alternateProductCode;
    }
    /**
     * Set alternateProductCode value
     * @param string $alternateProductCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV6
     */
    public function setAlternateProductCode(?string $alternateProductCode = null): self
    {
        // validation for constraint: string
        if (!is_null($alternateProductCode) && !is_string($alternateProductCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternateProductCode, true), gettype($alternateProductCode)), __LINE__);
        }
        $this->alternateProductCode = $alternateProductCode;
        
        return $this;
    }
    /**
     * Get labelNumber value
     * @return string|null
     */
    public function getLabelNumber(): ?string
    {
        return $this->labelNumber;
    }
    /**
     * Set labelNumber value
     * @param string $labelNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV6
     */
    public function setLabelNumber(?string $labelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($labelNumber) && !is_string($labelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelNumber, true), gettype($labelNumber)), __LINE__);
        }
        $this->labelNumber = $labelNumber;
        
        return $this;
    }
}
