<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultQuickCost Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultQuickCost extends AbstractStructBase
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
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService[]
     */
    protected ?array $service = null;
    /**
     * The zone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zone = null;
    /**
     * Constructor method for resultQuickCost
     * @uses ChronoApiResultQuickCost::setAmount()
     * @uses ChronoApiResultQuickCost::setAmountTTC()
     * @uses ChronoApiResultQuickCost::setAmountTVA()
     * @uses ChronoApiResultQuickCost::setErrorCode()
     * @uses ChronoApiResultQuickCost::setErrorMessage()
     * @uses ChronoApiResultQuickCost::setService()
     * @uses ChronoApiResultQuickCost::setZone()
     * @param float $amount
     * @param float $amountTTC
     * @param float $amountTVA
     * @param int $errorCode
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService[] $service
     * @param string $zone
     */
    public function __construct(?float $amount = null, ?float $amountTTC = null, ?float $amountTVA = null, ?int $errorCode = null, ?string $errorMessage = null, ?array $service = null, ?string $zone = null)
    {
        $this
            ->setAmount($amount)
            ->setAmountTTC($amountTTC)
            ->setAmountTVA($amountTVA)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setService($service)
            ->setZone($zone);
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCost
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCost
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCost
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
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCost
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCost
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get service value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService[]
     */
    public function getService(): ?array
    {
        return isset($this->service) ? $this->service : null;
    }
    /**
     * This method is responsible for validating the values passed to the setService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceForArrayConstraintsFromSetService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultQuickCostServiceItem) {
            // validation for constraint: itemType
            if (!$resultQuickCostServiceItem instanceof \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService) {
                $invalidValues[] = is_object($resultQuickCostServiceItem) ? get_class($resultQuickCostServiceItem) : sprintf('%s(%s)', gettype($resultQuickCostServiceItem), var_export($resultQuickCostServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The service property can only contain items of type \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set service value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService[] $service
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCost
     */
    public function setService(?array $service = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceArrayErrorMessage = self::validateServiceForArrayConstraintsFromSetService($service))) {
            throw new InvalidArgumentException($serviceArrayErrorMessage, __LINE__);
        }
        if (is_null($service) || (is_array($service) && empty($service))) {
            unset($this->service);
        } else {
            $this->service = $service;
        }
        
        return $this;
    }
    /**
     * Add item to service value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService $item
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCost
     */
    public function addToService(\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService) {
            throw new InvalidArgumentException(sprintf('The service property can only contain items of type \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->service[] = $item;
        
        return $this;
    }
    /**
     * Get zone value
     * @return string|null
     */
    public function getZone(): ?string
    {
        return $this->zone;
    }
    /**
     * Set zone value
     * @param string $zone
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCost
     */
    public function setZone(?string $zone = null): self
    {
        // validation for constraint: string
        if (!is_null($zone) && !is_string($zone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zone, true), gettype($zone)), __LINE__);
        }
        $this->zone = $zone;
        
        return $this;
    }
}
