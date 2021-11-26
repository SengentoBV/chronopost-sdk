<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiEsdValue extends AbstractStructBase
{
    /**
     * The closingDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $closingDateTime = null;
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
     * The retrievalDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $retrievalDateTime = null;
    /**
     * The shipperBuildingFloor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperBuildingFloor = null;
    /**
     * The shipperCarriesCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCarriesCode = null;
    /**
     * The shipperServiceDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperServiceDirection = null;
    /**
     * The specificInstructions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $specificInstructions = null;
    /**
     * The width
     * @var float|null
     */
    protected ?float $width = null;
    /**
     * Constructor method for esdValue
     * @uses ChronoApiEsdValue::setClosingDateTime()
     * @uses ChronoApiEsdValue::setHeight()
     * @uses ChronoApiEsdValue::setLength()
     * @uses ChronoApiEsdValue::setRetrievalDateTime()
     * @uses ChronoApiEsdValue::setShipperBuildingFloor()
     * @uses ChronoApiEsdValue::setShipperCarriesCode()
     * @uses ChronoApiEsdValue::setShipperServiceDirection()
     * @uses ChronoApiEsdValue::setSpecificInstructions()
     * @uses ChronoApiEsdValue::setWidth()
     * @param string $closingDateTime
     * @param float $height
     * @param float $length
     * @param string $retrievalDateTime
     * @param string $shipperBuildingFloor
     * @param string $shipperCarriesCode
     * @param string $shipperServiceDirection
     * @param string $specificInstructions
     * @param float $width
     */
    public function __construct(?string $closingDateTime = null, ?float $height = null, ?float $length = null, ?string $retrievalDateTime = null, ?string $shipperBuildingFloor = null, ?string $shipperCarriesCode = null, ?string $shipperServiceDirection = null, ?string $specificInstructions = null, ?float $width = null)
    {
        $this
            ->setClosingDateTime($closingDateTime)
            ->setHeight($height)
            ->setLength($length)
            ->setRetrievalDateTime($retrievalDateTime)
            ->setShipperBuildingFloor($shipperBuildingFloor)
            ->setShipperCarriesCode($shipperCarriesCode)
            ->setShipperServiceDirection($shipperServiceDirection)
            ->setSpecificInstructions($specificInstructions)
            ->setWidth($width);
    }
    /**
     * Get closingDateTime value
     * @return string|null
     */
    public function getClosingDateTime(): ?string
    {
        return $this->closingDateTime;
    }
    /**
     * Set closingDateTime value
     * @param string $closingDateTime
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue
     */
    public function setClosingDateTime(?string $closingDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($closingDateTime) && !is_string($closingDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingDateTime, true), gettype($closingDateTime)), __LINE__);
        }
        $this->closingDateTime = $closingDateTime;
        
        return $this;
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue
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
     * Get retrievalDateTime value
     * @return string|null
     */
    public function getRetrievalDateTime(): ?string
    {
        return $this->retrievalDateTime;
    }
    /**
     * Set retrievalDateTime value
     * @param string $retrievalDateTime
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue
     */
    public function setRetrievalDateTime(?string $retrievalDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($retrievalDateTime) && !is_string($retrievalDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retrievalDateTime, true), gettype($retrievalDateTime)), __LINE__);
        }
        $this->retrievalDateTime = $retrievalDateTime;
        
        return $this;
    }
    /**
     * Get shipperBuildingFloor value
     * @return string|null
     */
    public function getShipperBuildingFloor(): ?string
    {
        return $this->shipperBuildingFloor;
    }
    /**
     * Set shipperBuildingFloor value
     * @param string $shipperBuildingFloor
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue
     */
    public function setShipperBuildingFloor(?string $shipperBuildingFloor = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperBuildingFloor) && !is_string($shipperBuildingFloor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperBuildingFloor, true), gettype($shipperBuildingFloor)), __LINE__);
        }
        $this->shipperBuildingFloor = $shipperBuildingFloor;
        
        return $this;
    }
    /**
     * Get shipperCarriesCode value
     * @return string|null
     */
    public function getShipperCarriesCode(): ?string
    {
        return $this->shipperCarriesCode;
    }
    /**
     * Set shipperCarriesCode value
     * @param string $shipperCarriesCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue
     */
    public function setShipperCarriesCode(?string $shipperCarriesCode = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCarriesCode) && !is_string($shipperCarriesCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCarriesCode, true), gettype($shipperCarriesCode)), __LINE__);
        }
        $this->shipperCarriesCode = $shipperCarriesCode;
        
        return $this;
    }
    /**
     * Get shipperServiceDirection value
     * @return string|null
     */
    public function getShipperServiceDirection(): ?string
    {
        return $this->shipperServiceDirection;
    }
    /**
     * Set shipperServiceDirection value
     * @param string $shipperServiceDirection
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue
     */
    public function setShipperServiceDirection(?string $shipperServiceDirection = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperServiceDirection) && !is_string($shipperServiceDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperServiceDirection, true), gettype($shipperServiceDirection)), __LINE__);
        }
        $this->shipperServiceDirection = $shipperServiceDirection;
        
        return $this;
    }
    /**
     * Get specificInstructions value
     * @return string|null
     */
    public function getSpecificInstructions(): ?string
    {
        return $this->specificInstructions;
    }
    /**
     * Set specificInstructions value
     * @param string $specificInstructions
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue
     */
    public function setSpecificInstructions(?string $specificInstructions = null): self
    {
        // validation for constraint: string
        if (!is_null($specificInstructions) && !is_string($specificInstructions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($specificInstructions, true), gettype($specificInstructions)), __LINE__);
        }
        $this->specificInstructions = $specificInstructions;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue
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
