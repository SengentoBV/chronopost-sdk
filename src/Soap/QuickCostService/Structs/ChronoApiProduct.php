<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for product Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiProduct extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The amountTTC
     * @var float|null
     */
    protected ?float $amountTTC = null;
    /**
     * The amountTVA
     * @var float|null
     */
    protected ?float $amountTVA = null;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * Constructor method for product
     * @uses ChronoApiProduct::setAmount()
     * @uses ChronoApiProduct::setAmountTTC()
     * @uses ChronoApiProduct::setAmountTVA()
     * @uses ChronoApiProduct::setProductCode()
     * @param float $amount
     * @param float $amountTTC
     * @param float $amountTVA
     * @param string $productCode
     */
    public function __construct(?float $amount = null, ?float $amountTTC = null, ?float $amountTVA = null, ?string $productCode = null)
    {
        $this
            ->setAmount($amount)
            ->setAmountTTC($amountTTC)
            ->setAmountTVA($amountTVA)
            ->setProductCode($productCode);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get amountTTC value
     * @return float|null
     */
    public function getAmountTTC(): ?float
    {
        return $this->amountTTC;
    }
    /**
     * Set amountTTC value
     * @param float $amountTTC
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct
     */
    public function setAmountTTC(?float $amountTTC = null): self
    {
        // validation for constraint: float
        if (!is_null($amountTTC) && !(is_float($amountTTC) || is_numeric($amountTTC))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountTTC, true), gettype($amountTTC)), __LINE__);
        }
        $this->amountTTC = $amountTTC;
        
        return $this;
    }
    /**
     * Get amountTVA value
     * @return float|null
     */
    public function getAmountTVA(): ?float
    {
        return $this->amountTVA;
    }
    /**
     * Set amountTVA value
     * @param float $amountTVA
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct
     */
    public function setAmountTVA(?float $amountTVA = null): self
    {
        // validation for constraint: float
        if (!is_null($amountTVA) && !(is_float($amountTVA) || is_numeric($amountTVA))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountTVA, true), gettype($amountTVA)), __LINE__);
        }
        $this->amountTVA = $amountTVA;
        
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        
        return $this;
    }
}
