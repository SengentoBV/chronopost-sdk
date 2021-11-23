<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultMultiParcelExpeditionValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultMultiParcelExpeditionValue extends ChronoApiResultShippingValue
{
    /**
     * The ESDFullNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ESDFullNumber = null;
    /**
     * The ESDNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ESDNumber = null;
    /**
     * The pickupDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pickupDate = null;
    /**
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reservationNumber = null;
    /**
     * The resultMultiParcelValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue[]
     */
    protected ?array $resultMultiParcelValue = null;
    /**
     * Constructor method for resultMultiParcelExpeditionValue
     * @uses ChronoApiResultMultiParcelExpeditionValue::setESDFullNumber()
     * @uses ChronoApiResultMultiParcelExpeditionValue::setESDNumber()
     * @uses ChronoApiResultMultiParcelExpeditionValue::setPickupDate()
     * @uses ChronoApiResultMultiParcelExpeditionValue::setReservationNumber()
     * @uses ChronoApiResultMultiParcelExpeditionValue::setResultMultiParcelValue()
     * @param string $eSDFullNumber
     * @param string $eSDNumber
     * @param string $pickupDate
     * @param string $reservationNumber
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue[] $resultMultiParcelValue
     */
    public function __construct(?string $eSDFullNumber = null, ?string $eSDNumber = null, ?string $pickupDate = null, ?string $reservationNumber = null, ?array $resultMultiParcelValue = null)
    {
        $this
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setPickupDate($pickupDate)
            ->setReservationNumber($reservationNumber)
            ->setResultMultiParcelValue($resultMultiParcelValue);
    }
    /**
     * Get ESDFullNumber value
     * @return string|null
     */
    public function getESDFullNumber(): ?string
    {
        return $this->ESDFullNumber;
    }
    /**
     * Set ESDFullNumber value
     * @param string $eSDFullNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelExpeditionValue
     */
    public function setESDFullNumber(?string $eSDFullNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($eSDFullNumber) && !is_string($eSDFullNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDFullNumber, true), gettype($eSDFullNumber)), __LINE__);
        }
        $this->ESDFullNumber = $eSDFullNumber;
        
        return $this;
    }
    /**
     * Get ESDNumber value
     * @return string|null
     */
    public function getESDNumber(): ?string
    {
        return $this->ESDNumber;
    }
    /**
     * Set ESDNumber value
     * @param string $eSDNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelExpeditionValue
     */
    public function setESDNumber(?string $eSDNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($eSDNumber) && !is_string($eSDNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDNumber, true), gettype($eSDNumber)), __LINE__);
        }
        $this->ESDNumber = $eSDNumber;
        
        return $this;
    }
    /**
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $pickupDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelExpeditionValue
     */
    public function setPickupDate(?string $pickupDate = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
        
        return $this;
    }
    /**
     * Get reservationNumber value
     * @return string|null
     */
    public function getReservationNumber(): ?string
    {
        return $this->reservationNumber;
    }
    /**
     * Set reservationNumber value
     * @param string $reservationNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelExpeditionValue
     */
    public function setReservationNumber(?string $reservationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationNumber) && !is_string($reservationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationNumber, true), gettype($reservationNumber)), __LINE__);
        }
        $this->reservationNumber = $reservationNumber;
        
        return $this;
    }
    /**
     * Get resultMultiParcelValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue[]
     */
    public function getResultMultiParcelValue(): ?array
    {
        return isset($this->resultMultiParcelValue) ? $this->resultMultiParcelValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResultMultiParcelValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResultMultiParcelValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultMultiParcelValueForArrayConstraintsFromSetResultMultiParcelValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultMultiParcelExpeditionValueResultMultiParcelValueItem) {
            // validation for constraint: itemType
            if (!$resultMultiParcelExpeditionValueResultMultiParcelValueItem instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue) {
                $invalidValues[] = is_object($resultMultiParcelExpeditionValueResultMultiParcelValueItem) ? get_class($resultMultiParcelExpeditionValueResultMultiParcelValueItem) : sprintf('%s(%s)', gettype($resultMultiParcelExpeditionValueResultMultiParcelValueItem), var_export($resultMultiParcelExpeditionValueResultMultiParcelValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The resultMultiParcelValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set resultMultiParcelValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue[] $resultMultiParcelValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelExpeditionValue
     */
    public function setResultMultiParcelValue(?array $resultMultiParcelValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($resultMultiParcelValueArrayErrorMessage = self::validateResultMultiParcelValueForArrayConstraintsFromSetResultMultiParcelValue($resultMultiParcelValue))) {
            throw new InvalidArgumentException($resultMultiParcelValueArrayErrorMessage, __LINE__);
        }
        if (is_null($resultMultiParcelValue) || (is_array($resultMultiParcelValue) && empty($resultMultiParcelValue))) {
            unset($this->resultMultiParcelValue);
        } else {
            $this->resultMultiParcelValue = $resultMultiParcelValue;
        }
        
        return $this;
    }
    /**
     * Add item to resultMultiParcelValue value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue $item
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelExpeditionValue
     */
    public function addToResultMultiParcelValue(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue) {
            throw new InvalidArgumentException(sprintf('The resultMultiParcelValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->resultMultiParcelValue[] = $item;
        
        return $this;
    }
}
