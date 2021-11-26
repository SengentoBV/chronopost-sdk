<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSkybillWithDimensionsValue extends ChronoApiSkybillValue
{
    /**
     * The height
     * @var float|null
     */
    protected ?float $height = null;
    /**
     * The length
     * @var float|null
     */
    protected ?float $length = null;
    /**
     * The width
     * @var float|null
     */
    protected ?float $width = null;
    /**
     * Constructor method for skybillWithDimensionsValue
     * @uses ChronoApiSkybillWithDimensionsValue::setHeight()
     * @uses ChronoApiSkybillWithDimensionsValue::setLength()
     * @uses ChronoApiSkybillWithDimensionsValue::setWidth()
     * @param float $height
     * @param float $length
     * @param float $width
     */
    public function __construct(?float $height = null, ?float $length = null, ?float $width = null)
    {
        $this
            ->setHeight($height)
            ->setLength($length)
            ->setWidth($width);
    }
    /**
     * Get height value
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param float $height
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValue
     */
    public function setHeight(?float $height = null): self
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        
        return $this;
    }
    /**
     * Get length value
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param float $length
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValue
     */
    public function setLength(?float $length = null): self
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;
        
        return $this;
    }
    /**
     * Get width value
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param float $width
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValue
     */
    public function setWidth(?float $width = null): self
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        
        return $this;
    }
}
