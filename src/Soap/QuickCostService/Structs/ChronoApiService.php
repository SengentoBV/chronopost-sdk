<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for service Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiService extends AbstractStructBase
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
     * The codeService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeService = null;
    /**
     * The label
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $label = null;
    /**
     * Constructor method for service
     * @uses ChronoApiService::setAmount()
     * @uses ChronoApiService::setAmountTTC()
     * @uses ChronoApiService::setAmountTVA()
     * @uses ChronoApiService::setCodeService()
     * @uses ChronoApiService::setLabel()
     * @param float $amount
     * @param float $amountTTC
     * @param float $amountTVA
     * @param string $codeService
     * @param string $label
     */
    public function __construct(?float $amount = null, ?float $amountTTC = null, ?float $amountTVA = null, ?string $codeService = null, ?string $label = null)
    {
        $this
            ->setAmount($amount)
            ->setAmountTTC($amountTTC)
            ->setAmountTVA($amountTVA)
            ->setCodeService($codeService)
            ->setLabel($label);
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService
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
     * Get codeService value
     * @return string|null
     */
    public function getCodeService(): ?string
    {
        return $this->codeService;
    }
    /**
     * Set codeService value
     * @param string $codeService
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService
     */
    public function setCodeService(?string $codeService = null): self
    {
        // validation for constraint: string
        if (!is_null($codeService) && !is_string($codeService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeService, true), gettype($codeService)), __LINE__);
        }
        $this->codeService = $codeService;
        
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        
        return $this;
    }
}
