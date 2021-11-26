<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for articleValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiArticleValue extends AbstractStructBase
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content = null;
    /**
     * The contentInLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $contentInLanguage = null;
    /**
     * The grossWeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $grossWeight = null;
    /**
     * The hscode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $hscode = null;
    /**
     * The netWeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $netWeight = null;
    /**
     * The origin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $origin = null;
    /**
     * The position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * The regime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $regime = null;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * Constructor method for articleValue
     * @uses ChronoApiArticleValue::setContent()
     * @uses ChronoApiArticleValue::setContentInLanguage()
     * @uses ChronoApiArticleValue::setGrossWeight()
     * @uses ChronoApiArticleValue::setHscode()
     * @uses ChronoApiArticleValue::setNetWeight()
     * @uses ChronoApiArticleValue::setOrigin()
     * @uses ChronoApiArticleValue::setPosition()
     * @uses ChronoApiArticleValue::setQuantity()
     * @uses ChronoApiArticleValue::setRegime()
     * @uses ChronoApiArticleValue::setValue()
     * @param string $content
     * @param string $contentInLanguage
     * @param float $grossWeight
     * @param string $hscode
     * @param float $netWeight
     * @param string $origin
     * @param int $position
     * @param int $quantity
     * @param string $regime
     * @param float $value
     */
    public function __construct(?string $content = null, ?string $contentInLanguage = null, ?float $grossWeight = null, ?string $hscode = null, ?float $netWeight = null, ?string $origin = null, ?int $position = null, ?int $quantity = null, ?string $regime = null, ?float $value = null)
    {
        $this
            ->setContent($content)
            ->setContentInLanguage($contentInLanguage)
            ->setGrossWeight($grossWeight)
            ->setHscode($hscode)
            ->setNetWeight($netWeight)
            ->setOrigin($origin)
            ->setPosition($position)
            ->setQuantity($quantity)
            ->setRegime($regime)
            ->setValue($value);
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->content = $content;
        
        return $this;
    }
    /**
     * Get contentInLanguage value
     * @return string|null
     */
    public function getContentInLanguage(): ?string
    {
        return $this->contentInLanguage;
    }
    /**
     * Set contentInLanguage value
     * @param string $contentInLanguage
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setContentInLanguage(?string $contentInLanguage = null): self
    {
        // validation for constraint: string
        if (!is_null($contentInLanguage) && !is_string($contentInLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentInLanguage, true), gettype($contentInLanguage)), __LINE__);
        }
        $this->contentInLanguage = $contentInLanguage;
        
        return $this;
    }
    /**
     * Get grossWeight value
     * @return float|null
     */
    public function getGrossWeight(): ?float
    {
        return $this->grossWeight;
    }
    /**
     * Set grossWeight value
     * @param float $grossWeight
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setGrossWeight(?float $grossWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($grossWeight) && !(is_float($grossWeight) || is_numeric($grossWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grossWeight, true), gettype($grossWeight)), __LINE__);
        }
        $this->grossWeight = $grossWeight;
        
        return $this;
    }
    /**
     * Get hscode value
     * @return string|null
     */
    public function getHscode(): ?string
    {
        return $this->hscode;
    }
    /**
     * Set hscode value
     * @param string $hscode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setHscode(?string $hscode = null): self
    {
        // validation for constraint: string
        if (!is_null($hscode) && !is_string($hscode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hscode, true), gettype($hscode)), __LINE__);
        }
        $this->hscode = $hscode;
        
        return $this;
    }
    /**
     * Get netWeight value
     * @return float|null
     */
    public function getNetWeight(): ?float
    {
        return $this->netWeight;
    }
    /**
     * Set netWeight value
     * @param float $netWeight
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setNetWeight(?float $netWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($netWeight) && !(is_float($netWeight) || is_numeric($netWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netWeight, true), gettype($netWeight)), __LINE__);
        }
        $this->netWeight = $netWeight;
        
        return $this;
    }
    /**
     * Get origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param string $origin
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        
        return $this;
    }
    /**
     * Get regime value
     * @return string|null
     */
    public function getRegime(): ?string
    {
        return $this->regime;
    }
    /**
     * Set regime value
     * @param string $regime
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setRegime(?string $regime = null): self
    {
        // validation for constraint: string
        if (!is_null($regime) && !is_string($regime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regime, true), gettype($regime)), __LINE__);
        }
        $this->regime = $regime;
        
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiArticleValue
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
