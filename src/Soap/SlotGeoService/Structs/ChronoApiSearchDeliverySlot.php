<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchDeliverySlot Structs
 * Meta information extracted from the WSDL
 * - type: tns:searchDeliverySlot
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSearchDeliverySlot extends AbstractStructBase
{
    /**
     * The callerTool
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $callerTool = null;
    /**
     * The productType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The shipperAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperAdress1 = null;
    /**
     * The shipperAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperAdress2 = null;
    /**
     * The shipperZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperZipCode = null;
    /**
     * The shipperCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCity = null;
    /**
     * The shipperCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCountry = null;
    /**
     * The recipientAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientAdress1 = null;
    /**
     * The recipientAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientAdress2 = null;
    /**
     * The recipientZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientZipCode = null;
    /**
     * The recipientCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCity = null;
    /**
     * The recipientCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCountry = null;
    /**
     * The injectionSite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $injectionSite = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $weight = null;
    /**
     * The dateBegin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateBegin = null;
    /**
     * The dateEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateEnd = null;
    /**
     * The shipperDeliverySlotClosed
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $shipperDeliverySlotClosed = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The rateN1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rateN1 = null;
    /**
     * The rateN2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rateN2 = null;
    /**
     * The rateN3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rateN3 = null;
    /**
     * The rateN4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rateN4 = null;
    /**
     * The rateLevelsNotShow
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $rateLevelsNotShow = null;
    /**
     * The isDeliveryDate
     * @var bool|null
     */
    protected ?bool $isDeliveryDate = null;
    /**
     * The slotType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $slotType = null;
    /**
     * Constructor method for searchDeliverySlot
     * @uses ChronoApiSearchDeliverySlot::setCallerTool()
     * @uses ChronoApiSearchDeliverySlot::setProductType()
     * @uses ChronoApiSearchDeliverySlot::setShipperAdress1()
     * @uses ChronoApiSearchDeliverySlot::setShipperAdress2()
     * @uses ChronoApiSearchDeliverySlot::setShipperZipCode()
     * @uses ChronoApiSearchDeliverySlot::setShipperCity()
     * @uses ChronoApiSearchDeliverySlot::setShipperCountry()
     * @uses ChronoApiSearchDeliverySlot::setRecipientAdress1()
     * @uses ChronoApiSearchDeliverySlot::setRecipientAdress2()
     * @uses ChronoApiSearchDeliverySlot::setRecipientZipCode()
     * @uses ChronoApiSearchDeliverySlot::setRecipientCity()
     * @uses ChronoApiSearchDeliverySlot::setRecipientCountry()
     * @uses ChronoApiSearchDeliverySlot::setInjectionSite()
     * @uses ChronoApiSearchDeliverySlot::setWeight()
     * @uses ChronoApiSearchDeliverySlot::setDateBegin()
     * @uses ChronoApiSearchDeliverySlot::setDateEnd()
     * @uses ChronoApiSearchDeliverySlot::setShipperDeliverySlotClosed()
     * @uses ChronoApiSearchDeliverySlot::setCurrency()
     * @uses ChronoApiSearchDeliverySlot::setRateN1()
     * @uses ChronoApiSearchDeliverySlot::setRateN2()
     * @uses ChronoApiSearchDeliverySlot::setRateN3()
     * @uses ChronoApiSearchDeliverySlot::setRateN4()
     * @uses ChronoApiSearchDeliverySlot::setRateLevelsNotShow()
     * @uses ChronoApiSearchDeliverySlot::setIsDeliveryDate()
     * @uses ChronoApiSearchDeliverySlot::setSlotType()
     * @param string $callerTool
     * @param string $productType
     * @param string $shipperAdress1
     * @param string $shipperAdress2
     * @param string $shipperZipCode
     * @param string $shipperCity
     * @param string $shipperCountry
     * @param string $recipientAdress1
     * @param string $recipientAdress2
     * @param string $recipientZipCode
     * @param string $recipientCity
     * @param string $recipientCountry
     * @param string $injectionSite
     * @param int $weight
     * @param string $dateBegin
     * @param string $dateEnd
     * @param string[] $shipperDeliverySlotClosed
     * @param string $currency
     * @param string $rateN1
     * @param string $rateN2
     * @param string $rateN3
     * @param string $rateN4
     * @param string[] $rateLevelsNotShow
     * @param bool $isDeliveryDate
     * @param string $slotType
     */
    public function __construct(?string $callerTool = null, ?string $productType = null, ?string $shipperAdress1 = null, ?string $shipperAdress2 = null, ?string $shipperZipCode = null, ?string $shipperCity = null, ?string $shipperCountry = null, ?string $recipientAdress1 = null, ?string $recipientAdress2 = null, ?string $recipientZipCode = null, ?string $recipientCity = null, ?string $recipientCountry = null, ?string $injectionSite = null, ?int $weight = null, ?string $dateBegin = null, ?string $dateEnd = null, ?array $shipperDeliverySlotClosed = null, ?string $currency = null, ?string $rateN1 = null, ?string $rateN2 = null, ?string $rateN3 = null, ?string $rateN4 = null, ?array $rateLevelsNotShow = null, ?bool $isDeliveryDate = null, ?string $slotType = null)
    {
        $this
            ->setCallerTool($callerTool)
            ->setProductType($productType)
            ->setShipperAdress1($shipperAdress1)
            ->setShipperAdress2($shipperAdress2)
            ->setShipperZipCode($shipperZipCode)
            ->setShipperCity($shipperCity)
            ->setShipperCountry($shipperCountry)
            ->setRecipientAdress1($recipientAdress1)
            ->setRecipientAdress2($recipientAdress2)
            ->setRecipientZipCode($recipientZipCode)
            ->setRecipientCity($recipientCity)
            ->setRecipientCountry($recipientCountry)
            ->setInjectionSite($injectionSite)
            ->setWeight($weight)
            ->setDateBegin($dateBegin)
            ->setDateEnd($dateEnd)
            ->setShipperDeliverySlotClosed($shipperDeliverySlotClosed)
            ->setCurrency($currency)
            ->setRateN1($rateN1)
            ->setRateN2($rateN2)
            ->setRateN3($rateN3)
            ->setRateN4($rateN4)
            ->setRateLevelsNotShow($rateLevelsNotShow)
            ->setIsDeliveryDate($isDeliveryDate)
            ->setSlotType($slotType);
    }
    /**
     * Get callerTool value
     * @return string|null
     */
    public function getCallerTool(): ?string
    {
        return $this->callerTool;
    }
    /**
     * Set callerTool value
     * @param string $callerTool
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setCallerTool(?string $callerTool = null): self
    {
        // validation for constraint: string
        if (!is_null($callerTool) && !is_string($callerTool)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callerTool, true), gettype($callerTool)), __LINE__);
        }
        $this->callerTool = $callerTool;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get shipperAdress1 value
     * @return string|null
     */
    public function getShipperAdress1(): ?string
    {
        return $this->shipperAdress1;
    }
    /**
     * Set shipperAdress1 value
     * @param string $shipperAdress1
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setShipperAdress1(?string $shipperAdress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperAdress1) && !is_string($shipperAdress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAdress1, true), gettype($shipperAdress1)), __LINE__);
        }
        $this->shipperAdress1 = $shipperAdress1;
        
        return $this;
    }
    /**
     * Get shipperAdress2 value
     * @return string|null
     */
    public function getShipperAdress2(): ?string
    {
        return $this->shipperAdress2;
    }
    /**
     * Set shipperAdress2 value
     * @param string $shipperAdress2
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setShipperAdress2(?string $shipperAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperAdress2) && !is_string($shipperAdress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAdress2, true), gettype($shipperAdress2)), __LINE__);
        }
        $this->shipperAdress2 = $shipperAdress2;
        
        return $this;
    }
    /**
     * Get shipperZipCode value
     * @return string|null
     */
    public function getShipperZipCode(): ?string
    {
        return $this->shipperZipCode;
    }
    /**
     * Set shipperZipCode value
     * @param string $shipperZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setShipperZipCode(?string $shipperZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperZipCode) && !is_string($shipperZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperZipCode, true), gettype($shipperZipCode)), __LINE__);
        }
        $this->shipperZipCode = $shipperZipCode;
        
        return $this;
    }
    /**
     * Get shipperCity value
     * @return string|null
     */
    public function getShipperCity(): ?string
    {
        return $this->shipperCity;
    }
    /**
     * Set shipperCity value
     * @param string $shipperCity
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setShipperCity(?string $shipperCity = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCity) && !is_string($shipperCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCity, true), gettype($shipperCity)), __LINE__);
        }
        $this->shipperCity = $shipperCity;
        
        return $this;
    }
    /**
     * Get shipperCountry value
     * @return string|null
     */
    public function getShipperCountry(): ?string
    {
        return $this->shipperCountry;
    }
    /**
     * Set shipperCountry value
     * @param string $shipperCountry
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setShipperCountry(?string $shipperCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCountry) && !is_string($shipperCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCountry, true), gettype($shipperCountry)), __LINE__);
        }
        $this->shipperCountry = $shipperCountry;
        
        return $this;
    }
    /**
     * Get recipientAdress1 value
     * @return string|null
     */
    public function getRecipientAdress1(): ?string
    {
        return $this->recipientAdress1;
    }
    /**
     * Set recipientAdress1 value
     * @param string $recipientAdress1
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRecipientAdress1(?string $recipientAdress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientAdress1) && !is_string($recipientAdress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientAdress1, true), gettype($recipientAdress1)), __LINE__);
        }
        $this->recipientAdress1 = $recipientAdress1;
        
        return $this;
    }
    /**
     * Get recipientAdress2 value
     * @return string|null
     */
    public function getRecipientAdress2(): ?string
    {
        return $this->recipientAdress2;
    }
    /**
     * Set recipientAdress2 value
     * @param string $recipientAdress2
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRecipientAdress2(?string $recipientAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientAdress2) && !is_string($recipientAdress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientAdress2, true), gettype($recipientAdress2)), __LINE__);
        }
        $this->recipientAdress2 = $recipientAdress2;
        
        return $this;
    }
    /**
     * Get recipientZipCode value
     * @return string|null
     */
    public function getRecipientZipCode(): ?string
    {
        return $this->recipientZipCode;
    }
    /**
     * Set recipientZipCode value
     * @param string $recipientZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRecipientZipCode(?string $recipientZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientZipCode) && !is_string($recipientZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientZipCode, true), gettype($recipientZipCode)), __LINE__);
        }
        $this->recipientZipCode = $recipientZipCode;
        
        return $this;
    }
    /**
     * Get recipientCity value
     * @return string|null
     */
    public function getRecipientCity(): ?string
    {
        return $this->recipientCity;
    }
    /**
     * Set recipientCity value
     * @param string $recipientCity
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRecipientCity(?string $recipientCity = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCity) && !is_string($recipientCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCity, true), gettype($recipientCity)), __LINE__);
        }
        $this->recipientCity = $recipientCity;
        
        return $this;
    }
    /**
     * Get recipientCountry value
     * @return string|null
     */
    public function getRecipientCountry(): ?string
    {
        return $this->recipientCountry;
    }
    /**
     * Set recipientCountry value
     * @param string $recipientCountry
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRecipientCountry(?string $recipientCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCountry) && !is_string($recipientCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountry, true), gettype($recipientCountry)), __LINE__);
        }
        $this->recipientCountry = $recipientCountry;
        
        return $this;
    }
    /**
     * Get injectionSite value
     * @return string|null
     */
    public function getInjectionSite(): ?string
    {
        return $this->injectionSite;
    }
    /**
     * Set injectionSite value
     * @param string $injectionSite
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setInjectionSite(?string $injectionSite = null): self
    {
        // validation for constraint: string
        if (!is_null($injectionSite) && !is_string($injectionSite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($injectionSite, true), gettype($injectionSite)), __LINE__);
        }
        $this->injectionSite = $injectionSite;
        
        return $this;
    }
    /**
     * Get weight value
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param int $weight
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setWeight(?int $weight = null): self
    {
        // validation for constraint: int
        if (!is_null($weight) && !(is_int($weight) || ctype_digit($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get dateBegin value
     * @return string|null
     */
    public function getDateBegin(): ?string
    {
        return $this->dateBegin;
    }
    /**
     * Set dateBegin value
     * @param string $dateBegin
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setDateBegin(?string $dateBegin = null): self
    {
        // validation for constraint: string
        if (!is_null($dateBegin) && !is_string($dateBegin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateBegin, true), gettype($dateBegin)), __LINE__);
        }
        $this->dateBegin = $dateBegin;
        
        return $this;
    }
    /**
     * Get dateEnd value
     * @return string|null
     */
    public function getDateEnd(): ?string
    {
        return $this->dateEnd;
    }
    /**
     * Set dateEnd value
     * @param string $dateEnd
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setDateEnd(?string $dateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($dateEnd) && !is_string($dateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEnd, true), gettype($dateEnd)), __LINE__);
        }
        $this->dateEnd = $dateEnd;
        
        return $this;
    }
    /**
     * Get shipperDeliverySlotClosed value
     * @return string[]
     */
    public function getShipperDeliverySlotClosed(): ?array
    {
        return $this->shipperDeliverySlotClosed;
    }
    /**
     * This method is responsible for validating the values passed to the setShipperDeliverySlotClosed method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipperDeliverySlotClosed method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipperDeliverySlotClosedForArrayConstraintsFromSetShipperDeliverySlotClosed(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDeliverySlotShipperDeliverySlotClosedItem) {
            // validation for constraint: itemType
            if (!is_string($searchDeliverySlotShipperDeliverySlotClosedItem)) {
                $invalidValues[] = is_object($searchDeliverySlotShipperDeliverySlotClosedItem) ? get_class($searchDeliverySlotShipperDeliverySlotClosedItem) : sprintf('%s(%s)', gettype($searchDeliverySlotShipperDeliverySlotClosedItem), var_export($searchDeliverySlotShipperDeliverySlotClosedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipperDeliverySlotClosed property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set shipperDeliverySlotClosed value
     * @throws InvalidArgumentException
     * @param string[] $shipperDeliverySlotClosed
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setShipperDeliverySlotClosed(?array $shipperDeliverySlotClosed = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipperDeliverySlotClosedArrayErrorMessage = self::validateShipperDeliverySlotClosedForArrayConstraintsFromSetShipperDeliverySlotClosed($shipperDeliverySlotClosed))) {
            throw new InvalidArgumentException($shipperDeliverySlotClosedArrayErrorMessage, __LINE__);
        }
        $this->shipperDeliverySlotClosed = $shipperDeliverySlotClosed;
        
        return $this;
    }
    /**
     * Add item to shipperDeliverySlotClosed value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function addToShipperDeliverySlotClosed(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The shipperDeliverySlotClosed property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipperDeliverySlotClosed[] = $item;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get rateN1 value
     * @return string|null
     */
    public function getRateN1(): ?string
    {
        return $this->rateN1;
    }
    /**
     * Set rateN1 value
     * @param string $rateN1
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRateN1(?string $rateN1 = null): self
    {
        // validation for constraint: string
        if (!is_null($rateN1) && !is_string($rateN1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateN1, true), gettype($rateN1)), __LINE__);
        }
        $this->rateN1 = $rateN1;
        
        return $this;
    }
    /**
     * Get rateN2 value
     * @return string|null
     */
    public function getRateN2(): ?string
    {
        return $this->rateN2;
    }
    /**
     * Set rateN2 value
     * @param string $rateN2
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRateN2(?string $rateN2 = null): self
    {
        // validation for constraint: string
        if (!is_null($rateN2) && !is_string($rateN2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateN2, true), gettype($rateN2)), __LINE__);
        }
        $this->rateN2 = $rateN2;
        
        return $this;
    }
    /**
     * Get rateN3 value
     * @return string|null
     */
    public function getRateN3(): ?string
    {
        return $this->rateN3;
    }
    /**
     * Set rateN3 value
     * @param string $rateN3
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRateN3(?string $rateN3 = null): self
    {
        // validation for constraint: string
        if (!is_null($rateN3) && !is_string($rateN3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateN3, true), gettype($rateN3)), __LINE__);
        }
        $this->rateN3 = $rateN3;
        
        return $this;
    }
    /**
     * Get rateN4 value
     * @return string|null
     */
    public function getRateN4(): ?string
    {
        return $this->rateN4;
    }
    /**
     * Set rateN4 value
     * @param string $rateN4
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRateN4(?string $rateN4 = null): self
    {
        // validation for constraint: string
        if (!is_null($rateN4) && !is_string($rateN4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateN4, true), gettype($rateN4)), __LINE__);
        }
        $this->rateN4 = $rateN4;
        
        return $this;
    }
    /**
     * Get rateLevelsNotShow value
     * @return string[]
     */
    public function getRateLevelsNotShow(): ?array
    {
        return $this->rateLevelsNotShow;
    }
    /**
     * This method is responsible for validating the values passed to the setRateLevelsNotShow method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRateLevelsNotShow method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRateLevelsNotShowForArrayConstraintsFromSetRateLevelsNotShow(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDeliverySlotRateLevelsNotShowItem) {
            // validation for constraint: itemType
            if (!is_string($searchDeliverySlotRateLevelsNotShowItem)) {
                $invalidValues[] = is_object($searchDeliverySlotRateLevelsNotShowItem) ? get_class($searchDeliverySlotRateLevelsNotShowItem) : sprintf('%s(%s)', gettype($searchDeliverySlotRateLevelsNotShowItem), var_export($searchDeliverySlotRateLevelsNotShowItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The rateLevelsNotShow property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set rateLevelsNotShow value
     * @throws InvalidArgumentException
     * @param string[] $rateLevelsNotShow
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setRateLevelsNotShow(?array $rateLevelsNotShow = null): self
    {
        // validation for constraint: array
        if ('' !== ($rateLevelsNotShowArrayErrorMessage = self::validateRateLevelsNotShowForArrayConstraintsFromSetRateLevelsNotShow($rateLevelsNotShow))) {
            throw new InvalidArgumentException($rateLevelsNotShowArrayErrorMessage, __LINE__);
        }
        $this->rateLevelsNotShow = $rateLevelsNotShow;
        
        return $this;
    }
    /**
     * Add item to rateLevelsNotShow value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function addToRateLevelsNotShow(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The rateLevelsNotShow property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->rateLevelsNotShow[] = $item;
        
        return $this;
    }
    /**
     * Get isDeliveryDate value
     * @return bool|null
     */
    public function getIsDeliveryDate(): ?bool
    {
        return $this->isDeliveryDate;
    }
    /**
     * Set isDeliveryDate value
     * @param bool $isDeliveryDate
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setIsDeliveryDate(?bool $isDeliveryDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeliveryDate) && !is_bool($isDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeliveryDate, true), gettype($isDeliveryDate)), __LINE__);
        }
        $this->isDeliveryDate = $isDeliveryDate;
        
        return $this;
    }
    /**
     * Get slotType value
     * @return string|null
     */
    public function getSlotType(): ?string
    {
        return $this->slotType;
    }
    /**
     * Set slotType value
     * @param string $slotType
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot
     */
    public function setSlotType(?string $slotType = null): self
    {
        // validation for constraint: string
        if (!is_null($slotType) && !is_string($slotType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($slotType, true), gettype($slotType)), __LINE__);
        }
        $this->slotType = $slotType;
        
        return $this;
    }
}
