<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infosPOD Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiInfosPOD extends AbstractStructBase
{
    /**
     * The dateDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateDeposit = null;
    /**
     * The depositCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depositCountry = null;
    /**
     * The depositZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depositZipCode = null;
    /**
     * The objectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $objectType = null;
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
     * The recipientName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientName = null;
    /**
     * The recipientRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientRef = null;
    /**
     * The recipientZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientZipCode = null;
    /**
     * The shipperCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCity = null;
    /**
     * The shipperRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperRef = null;
    /**
     * The shipperZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperZipCode = null;
    /**
     * The significantEvent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent $significantEvent = null;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillNumber = null;
    /**
     * Constructor method for infosPOD
     * @uses ChronoApiInfosPOD::setDateDeposit()
     * @uses ChronoApiInfosPOD::setDepositCountry()
     * @uses ChronoApiInfosPOD::setDepositZipCode()
     * @uses ChronoApiInfosPOD::setObjectType()
     * @uses ChronoApiInfosPOD::setRecipientCity()
     * @uses ChronoApiInfosPOD::setRecipientCountry()
     * @uses ChronoApiInfosPOD::setRecipientName()
     * @uses ChronoApiInfosPOD::setRecipientRef()
     * @uses ChronoApiInfosPOD::setRecipientZipCode()
     * @uses ChronoApiInfosPOD::setShipperCity()
     * @uses ChronoApiInfosPOD::setShipperRef()
     * @uses ChronoApiInfosPOD::setShipperZipCode()
     * @uses ChronoApiInfosPOD::setSignificantEvent()
     * @uses ChronoApiInfosPOD::setSkybillNumber()
     * @param string $dateDeposit
     * @param string $depositCountry
     * @param string $depositZipCode
     * @param string $objectType
     * @param string $recipientCity
     * @param string $recipientCountry
     * @param string $recipientName
     * @param string $recipientRef
     * @param string $recipientZipCode
     * @param string $shipperCity
     * @param string $shipperRef
     * @param string $shipperZipCode
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent $significantEvent
     * @param string $skybillNumber
     */
    public function __construct(?string $dateDeposit = null, ?string $depositCountry = null, ?string $depositZipCode = null, ?string $objectType = null, ?string $recipientCity = null, ?string $recipientCountry = null, ?string $recipientName = null, ?string $recipientRef = null, ?string $recipientZipCode = null, ?string $shipperCity = null, ?string $shipperRef = null, ?string $shipperZipCode = null, ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent $significantEvent = null, ?string $skybillNumber = null)
    {
        $this
            ->setDateDeposit($dateDeposit)
            ->setDepositCountry($depositCountry)
            ->setDepositZipCode($depositZipCode)
            ->setObjectType($objectType)
            ->setRecipientCity($recipientCity)
            ->setRecipientCountry($recipientCountry)
            ->setRecipientName($recipientName)
            ->setRecipientRef($recipientRef)
            ->setRecipientZipCode($recipientZipCode)
            ->setShipperCity($shipperCity)
            ->setShipperRef($shipperRef)
            ->setShipperZipCode($shipperZipCode)
            ->setSignificantEvent($significantEvent)
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get dateDeposit value
     * @return string|null
     */
    public function getDateDeposit(): ?string
    {
        return $this->dateDeposit;
    }
    /**
     * Set dateDeposit value
     * @param string $dateDeposit
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
     */
    public function setDateDeposit(?string $dateDeposit = null): self
    {
        // validation for constraint: string
        if (!is_null($dateDeposit) && !is_string($dateDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateDeposit, true), gettype($dateDeposit)), __LINE__);
        }
        $this->dateDeposit = $dateDeposit;
        
        return $this;
    }
    /**
     * Get depositCountry value
     * @return string|null
     */
    public function getDepositCountry(): ?string
    {
        return $this->depositCountry;
    }
    /**
     * Set depositCountry value
     * @param string $depositCountry
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
     */
    public function setDepositCountry(?string $depositCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($depositCountry) && !is_string($depositCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositCountry, true), gettype($depositCountry)), __LINE__);
        }
        $this->depositCountry = $depositCountry;
        
        return $this;
    }
    /**
     * Get depositZipCode value
     * @return string|null
     */
    public function getDepositZipCode(): ?string
    {
        return $this->depositZipCode;
    }
    /**
     * Set depositZipCode value
     * @param string $depositZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
     */
    public function setDepositZipCode(?string $depositZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($depositZipCode) && !is_string($depositZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositZipCode, true), gettype($depositZipCode)), __LINE__);
        }
        $this->depositZipCode = $depositZipCode;
        
        return $this;
    }
    /**
     * Get objectType value
     * @return string|null
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }
    /**
     * Set objectType value
     * @param string $objectType
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
     */
    public function setObjectType(?string $objectType = null): self
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
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
     * Get recipientName value
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }
    /**
     * Set recipientName value
     * @param string $recipientName
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
     */
    public function setRecipientName(?string $recipientName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientName) && !is_string($recipientName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientName, true), gettype($recipientName)), __LINE__);
        }
        $this->recipientName = $recipientName;
        
        return $this;
    }
    /**
     * Get recipientRef value
     * @return string|null
     */
    public function getRecipientRef(): ?string
    {
        return $this->recipientRef;
    }
    /**
     * Set recipientRef value
     * @param string $recipientRef
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
     */
    public function setRecipientRef(?string $recipientRef = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientRef) && !is_string($recipientRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientRef, true), gettype($recipientRef)), __LINE__);
        }
        $this->recipientRef = $recipientRef;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
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
     * Get shipperRef value
     * @return string|null
     */
    public function getShipperRef(): ?string
    {
        return $this->shipperRef;
    }
    /**
     * Set shipperRef value
     * @param string $shipperRef
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
     */
    public function setShipperRef(?string $shipperRef = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperRef) && !is_string($shipperRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperRef, true), gettype($shipperRef)), __LINE__);
        }
        $this->shipperRef = $shipperRef;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
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
     * Get significantEvent value
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent|null
     */
    public function getSignificantEvent(): ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent
    {
        return $this->significantEvent;
    }
    /**
     * Set significantEvent value
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent $significantEvent
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
     */
    public function setSignificantEvent(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent $significantEvent = null): self
    {
        $this->significantEvent = $significantEvent;
        
        return $this;
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        
        return $this;
    }
}
