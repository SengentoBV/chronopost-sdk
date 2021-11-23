<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV2 Structs
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV2
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiShippingMultiParcelWithReservationV2 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2[]
     */
    protected ?array $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modeRetour = null;
    /**
     * The numberOfParcel
     * @var int|null
     */
    protected ?int $numberOfParcel = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The multiParcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $multiParcel = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue $scheduledValue = null;
    /**
     * Constructor method for shippingMultiParcelWithReservationV2
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setEsdValue()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setHeaderValue()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setShipperValue()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setCustomerValue()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setRecipientValue()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setRefValue()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setSkybillValue()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setSkybillParamsValue()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setPassword()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setModeRetour()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setNumberOfParcel()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setVersion()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setMultiParcel()
     * @uses ChronoApiShippingMultiParcelWithReservationV2::setScheduledValue()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue[] $recipientValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue[] $refValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2[] $skybillValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue $scheduledValue
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue $scheduledValue = null)
    {
        $this
            ->setEsdValue($esdValue)
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setCustomerValue($customerValue)
            ->setRecipientValue($recipientValue)
            ->setRefValue($refValue)
            ->setSkybillValue($skybillValue)
            ->setSkybillParamsValue($skybillParamsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setNumberOfParcel($numberOfParcel)
            ->setVersion($version)
            ->setMultiParcel($multiParcel)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue|null
     */
    public function getEsdValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setEsdValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
    }
    /**
     * Get headerValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue|null
     */
    public function getHeaderValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setHeaderValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue|null
     */
    public function getShipperValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setShipperValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue|null
     */
    public function getCustomerValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setCustomerValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue[]
     */
    public function getRecipientValue(): ?array
    {
        return $this->recipientValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRecipientValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientValueForArrayConstraintsFromSetRecipientValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelWithReservationV2RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV2RecipientValueItem instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV2RecipientValueItem) ? get_class($shippingMultiParcelWithReservationV2RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV2RecipientValueItem), var_export($shippingMultiParcelWithReservationV2RecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue[] $recipientValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setRecipientValue(?array $recipientValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientValueArrayErrorMessage = self::validateRecipientValueForArrayConstraintsFromSetRecipientValue($recipientValue))) {
            throw new InvalidArgumentException($recipientValueArrayErrorMessage, __LINE__);
        }
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Add item to recipientValue value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue $item
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function addToRecipientValue(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue[]
     */
    public function getRefValue(): ?array
    {
        return $this->refValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefValueForArrayConstraintsFromSetRefValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelWithReservationV2RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV2RefValueItem instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV2RefValueItem) ? get_class($shippingMultiParcelWithReservationV2RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV2RefValueItem), var_export($shippingMultiParcelWithReservationV2RefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refValue value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue[] $refValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setRefValue(?array $refValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($refValueArrayErrorMessage = self::validateRefValueForArrayConstraintsFromSetRefValue($refValue))) {
            throw new InvalidArgumentException($refValueArrayErrorMessage, __LINE__);
        }
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Add item to refValue value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue $item
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function addToRefValue(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2[]
     */
    public function getSkybillValue(): ?array
    {
        return $this->skybillValue;
    }
    /**
     * This method is responsible for validating the values passed to the setSkybillValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybillValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillValueForArrayConstraintsFromSetSkybillValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelWithReservationV2SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV2SkybillValueItem instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV2SkybillValueItem) ? get_class($shippingMultiParcelWithReservationV2SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV2SkybillValueItem), var_export($shippingMultiParcelWithReservationV2SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2[] $skybillValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setSkybillValue(?array $skybillValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($skybillValueArrayErrorMessage = self::validateSkybillValueForArrayConstraintsFromSetSkybillValue($skybillValue))) {
            throw new InvalidArgumentException($skybillValueArrayErrorMessage, __LINE__);
        }
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Add item to skybillValue value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2 $item
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function addToSkybillValue(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue|null
     */
    public function getSkybillParamsValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setSkybillParamsValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get modeRetour value
     * @return string|null
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }
    /**
     * Set modeRetour value
     * @param string $modeRetour
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setModeRetour(?string $modeRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;
        
        return $this;
    }
    /**
     * Get numberOfParcel value
     * @return int|null
     */
    public function getNumberOfParcel(): ?int
    {
        return $this->numberOfParcel;
    }
    /**
     * Set numberOfParcel value
     * @param int $numberOfParcel
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setNumberOfParcel(?int $numberOfParcel = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get multiParcel value
     * @return string|null
     */
    public function getMultiParcel(): ?string
    {
        return $this->multiParcel;
    }
    /**
     * Set multiParcel value
     * @param string $multiParcel
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setMultiParcel(?string $multiParcel = null): self
    {
        // validation for constraint: string
        if (!is_null($multiParcel) && !is_string($multiParcel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiParcel, true), gettype($multiParcel)), __LINE__);
        }
        $this->multiParcel = $multiParcel;
        
        return $this;
    }
    /**
     * Get scheduledValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue|null
     */
    public function getScheduledValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue
    {
        return $this->scheduledValue;
    }
    /**
     * Set scheduledValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue $scheduledValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2
     */
    public function setScheduledValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
