<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultReservationMultiParcelExpeditionValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultReservationMultiParcelExpeditionValue extends AbstractStructBase
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
     * The resultParcelValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue[]
     */
    protected ?array $resultParcelValue = null;
    /**
     * Constructor method for resultReservationMultiParcelExpeditionValue
     * @uses ChronoApiResultReservationMultiParcelExpeditionValue::setESDFullNumber()
     * @uses ChronoApiResultReservationMultiParcelExpeditionValue::setESDNumber()
     * @uses ChronoApiResultReservationMultiParcelExpeditionValue::setErrorCode()
     * @uses ChronoApiResultReservationMultiParcelExpeditionValue::setErrorMessage()
     * @uses ChronoApiResultReservationMultiParcelExpeditionValue::setPickupDate()
     * @uses ChronoApiResultReservationMultiParcelExpeditionValue::setReservationNumber()
     * @uses ChronoApiResultReservationMultiParcelExpeditionValue::setResultParcelValue()
     * @param string $eSDFullNumber
     * @param string $eSDNumber
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $pickupDate
     * @param string $reservationNumber
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue[] $resultParcelValue
     */
    public function __construct(?string $eSDFullNumber = null, ?string $eSDNumber = null, ?int $errorCode = null, ?string $errorMessage = null, ?string $pickupDate = null, ?string $reservationNumber = null, ?array $resultParcelValue = null)
    {
        $this
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setPickupDate($pickupDate)
            ->setReservationNumber($reservationNumber)
            ->setResultParcelValue($resultParcelValue);
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValue
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
     * Get resultParcelValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue[]
     */
    public function getResultParcelValue(): ?array
    {
        return isset($this->resultParcelValue) ? $this->resultParcelValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResultParcelValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResultParcelValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultParcelValueForArrayConstraintsFromSetResultParcelValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultReservationMultiParcelExpeditionValueResultParcelValueItem) {
            // validation for constraint: itemType
            if (!$resultReservationMultiParcelExpeditionValueResultParcelValueItem instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue) {
                $invalidValues[] = is_object($resultReservationMultiParcelExpeditionValueResultParcelValueItem) ? get_class($resultReservationMultiParcelExpeditionValueResultParcelValueItem) : sprintf('%s(%s)', gettype($resultReservationMultiParcelExpeditionValueResultParcelValueItem), var_export($resultReservationMultiParcelExpeditionValueResultParcelValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The resultParcelValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set resultParcelValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue[] $resultParcelValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValue
     */
    public function setResultParcelValue(?array $resultParcelValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($resultParcelValueArrayErrorMessage = self::validateResultParcelValueForArrayConstraintsFromSetResultParcelValue($resultParcelValue))) {
            throw new InvalidArgumentException($resultParcelValueArrayErrorMessage, __LINE__);
        }
        if (is_null($resultParcelValue) || (is_array($resultParcelValue) && empty($resultParcelValue))) {
            unset($this->resultParcelValue);
        } else {
            $this->resultParcelValue = $resultParcelValue;
        }
        
        return $this;
    }
    /**
     * Add item to resultParcelValue value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue $item
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValue
     */
    public function addToResultParcelValue(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue) {
            throw new InvalidArgumentException(sprintf('The resultParcelValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultParcelValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->resultParcelValue[] = $item;
        
        return $this;
    }
}
