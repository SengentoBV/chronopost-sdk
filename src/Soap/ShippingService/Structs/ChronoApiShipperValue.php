<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipperValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiShipperValue extends AbstractStructBase
{
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
     * The shipperCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCity = null;
    /**
     * The shipperCivility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCivility = null;
    /**
     * The shipperContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperContactName = null;
    /**
     * The shipperCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCountry = null;
    /**
     * The shipperCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCountryName = null;
    /**
     * The shipperEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperEmail = null;
    /**
     * The shipperMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperMobilePhone = null;
    /**
     * The shipperName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperName = null;
    /**
     * The shipperName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperName2 = null;
    /**
     * The shipperPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperPhone = null;
    /**
     * The shipperPreAlert
     * @var int|null
     */
    protected ?int $shipperPreAlert = null;
    /**
     * The shipperZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperZipCode = null;
    /**
     * Constructor method for shipperValue
     * @uses ChronoApiShipperValue::setShipperAdress1()
     * @uses ChronoApiShipperValue::setShipperAdress2()
     * @uses ChronoApiShipperValue::setShipperCity()
     * @uses ChronoApiShipperValue::setShipperCivility()
     * @uses ChronoApiShipperValue::setShipperContactName()
     * @uses ChronoApiShipperValue::setShipperCountry()
     * @uses ChronoApiShipperValue::setShipperCountryName()
     * @uses ChronoApiShipperValue::setShipperEmail()
     * @uses ChronoApiShipperValue::setShipperMobilePhone()
     * @uses ChronoApiShipperValue::setShipperName()
     * @uses ChronoApiShipperValue::setShipperName2()
     * @uses ChronoApiShipperValue::setShipperPhone()
     * @uses ChronoApiShipperValue::setShipperPreAlert()
     * @uses ChronoApiShipperValue::setShipperZipCode()
     * @param string $shipperAdress1
     * @param string $shipperAdress2
     * @param string $shipperCity
     * @param string $shipperCivility
     * @param string $shipperContactName
     * @param string $shipperCountry
     * @param string $shipperCountryName
     * @param string $shipperEmail
     * @param string $shipperMobilePhone
     * @param string $shipperName
     * @param string $shipperName2
     * @param string $shipperPhone
     * @param int $shipperPreAlert
     * @param string $shipperZipCode
     */
    public function __construct(?string $shipperAdress1 = null, ?string $shipperAdress2 = null, ?string $shipperCity = null, ?string $shipperCivility = null, ?string $shipperContactName = null, ?string $shipperCountry = null, ?string $shipperCountryName = null, ?string $shipperEmail = null, ?string $shipperMobilePhone = null, ?string $shipperName = null, ?string $shipperName2 = null, ?string $shipperPhone = null, ?int $shipperPreAlert = null, ?string $shipperZipCode = null)
    {
        $this
            ->setShipperAdress1($shipperAdress1)
            ->setShipperAdress2($shipperAdress2)
            ->setShipperCity($shipperCity)
            ->setShipperCivility($shipperCivility)
            ->setShipperContactName($shipperContactName)
            ->setShipperCountry($shipperCountry)
            ->setShipperCountryName($shipperCountryName)
            ->setShipperEmail($shipperEmail)
            ->setShipperMobilePhone($shipperMobilePhone)
            ->setShipperName($shipperName)
            ->setShipperName2($shipperName2)
            ->setShipperPhone($shipperPhone)
            ->setShipperPreAlert($shipperPreAlert)
            ->setShipperZipCode($shipperZipCode);
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
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
     * Get shipperCivility value
     * @return string|null
     */
    public function getShipperCivility(): ?string
    {
        return $this->shipperCivility;
    }
    /**
     * Set shipperCivility value
     * @param string $shipperCivility
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
     */
    public function setShipperCivility(?string $shipperCivility = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCivility) && !is_string($shipperCivility)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCivility, true), gettype($shipperCivility)), __LINE__);
        }
        $this->shipperCivility = $shipperCivility;
        
        return $this;
    }
    /**
     * Get shipperContactName value
     * @return string|null
     */
    public function getShipperContactName(): ?string
    {
        return $this->shipperContactName;
    }
    /**
     * Set shipperContactName value
     * @param string $shipperContactName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
     */
    public function setShipperContactName(?string $shipperContactName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperContactName) && !is_string($shipperContactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperContactName, true), gettype($shipperContactName)), __LINE__);
        }
        $this->shipperContactName = $shipperContactName;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
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
     * Get shipperCountryName value
     * @return string|null
     */
    public function getShipperCountryName(): ?string
    {
        return $this->shipperCountryName;
    }
    /**
     * Set shipperCountryName value
     * @param string $shipperCountryName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
     */
    public function setShipperCountryName(?string $shipperCountryName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCountryName) && !is_string($shipperCountryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCountryName, true), gettype($shipperCountryName)), __LINE__);
        }
        $this->shipperCountryName = $shipperCountryName;
        
        return $this;
    }
    /**
     * Get shipperEmail value
     * @return string|null
     */
    public function getShipperEmail(): ?string
    {
        return $this->shipperEmail;
    }
    /**
     * Set shipperEmail value
     * @param string $shipperEmail
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
     */
    public function setShipperEmail(?string $shipperEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperEmail) && !is_string($shipperEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperEmail, true), gettype($shipperEmail)), __LINE__);
        }
        $this->shipperEmail = $shipperEmail;
        
        return $this;
    }
    /**
     * Get shipperMobilePhone value
     * @return string|null
     */
    public function getShipperMobilePhone(): ?string
    {
        return $this->shipperMobilePhone;
    }
    /**
     * Set shipperMobilePhone value
     * @param string $shipperMobilePhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
     */
    public function setShipperMobilePhone(?string $shipperMobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperMobilePhone) && !is_string($shipperMobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperMobilePhone, true), gettype($shipperMobilePhone)), __LINE__);
        }
        $this->shipperMobilePhone = $shipperMobilePhone;
        
        return $this;
    }
    /**
     * Get shipperName value
     * @return string|null
     */
    public function getShipperName(): ?string
    {
        return $this->shipperName;
    }
    /**
     * Set shipperName value
     * @param string $shipperName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
     */
    public function setShipperName(?string $shipperName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperName) && !is_string($shipperName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName, true), gettype($shipperName)), __LINE__);
        }
        $this->shipperName = $shipperName;
        
        return $this;
    }
    /**
     * Get shipperName2 value
     * @return string|null
     */
    public function getShipperName2(): ?string
    {
        return $this->shipperName2;
    }
    /**
     * Set shipperName2 value
     * @param string $shipperName2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
     */
    public function setShipperName2(?string $shipperName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperName2) && !is_string($shipperName2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName2, true), gettype($shipperName2)), __LINE__);
        }
        $this->shipperName2 = $shipperName2;
        
        return $this;
    }
    /**
     * Get shipperPhone value
     * @return string|null
     */
    public function getShipperPhone(): ?string
    {
        return $this->shipperPhone;
    }
    /**
     * Set shipperPhone value
     * @param string $shipperPhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
     */
    public function setShipperPhone(?string $shipperPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperPhone) && !is_string($shipperPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperPhone, true), gettype($shipperPhone)), __LINE__);
        }
        $this->shipperPhone = $shipperPhone;
        
        return $this;
    }
    /**
     * Get shipperPreAlert value
     * @return int|null
     */
    public function getShipperPreAlert(): ?int
    {
        return $this->shipperPreAlert;
    }
    /**
     * Set shipperPreAlert value
     * @param int $shipperPreAlert
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
     */
    public function setShipperPreAlert(?int $shipperPreAlert = null): self
    {
        // validation for constraint: int
        if (!is_null($shipperPreAlert) && !(is_int($shipperPreAlert) || ctype_digit($shipperPreAlert))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipperPreAlert, true), gettype($shipperPreAlert)), __LINE__);
        }
        $this->shipperPreAlert = $shipperPreAlert;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
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
}
