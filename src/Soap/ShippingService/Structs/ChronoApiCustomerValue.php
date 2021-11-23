<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customerValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiCustomerValue extends AbstractStructBase
{
    /**
     * The customerAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerAdress1 = null;
    /**
     * The customerAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerAdress2 = null;
    /**
     * The customerCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerCity = null;
    /**
     * The customerCivility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerCivility = null;
    /**
     * The customerContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerContactName = null;
    /**
     * The customerCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerCountry = null;
    /**
     * The customerCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerCountryName = null;
    /**
     * The customerEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerEmail = null;
    /**
     * The customerMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerMobilePhone = null;
    /**
     * The customerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The customerName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerName2 = null;
    /**
     * The customerPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerPhone = null;
    /**
     * The customerPreAlert
     * @var int|null
     */
    protected ?int $customerPreAlert = null;
    /**
     * The customerZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerZipCode = null;
    /**
     * The printAsSender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $printAsSender = null;
    /**
     * Constructor method for customerValue
     * @uses ChronoApiCustomerValue::setCustomerAdress1()
     * @uses ChronoApiCustomerValue::setCustomerAdress2()
     * @uses ChronoApiCustomerValue::setCustomerCity()
     * @uses ChronoApiCustomerValue::setCustomerCivility()
     * @uses ChronoApiCustomerValue::setCustomerContactName()
     * @uses ChronoApiCustomerValue::setCustomerCountry()
     * @uses ChronoApiCustomerValue::setCustomerCountryName()
     * @uses ChronoApiCustomerValue::setCustomerEmail()
     * @uses ChronoApiCustomerValue::setCustomerMobilePhone()
     * @uses ChronoApiCustomerValue::setCustomerName()
     * @uses ChronoApiCustomerValue::setCustomerName2()
     * @uses ChronoApiCustomerValue::setCustomerPhone()
     * @uses ChronoApiCustomerValue::setCustomerPreAlert()
     * @uses ChronoApiCustomerValue::setCustomerZipCode()
     * @uses ChronoApiCustomerValue::setPrintAsSender()
     * @param string $customerAdress1
     * @param string $customerAdress2
     * @param string $customerCity
     * @param string $customerCivility
     * @param string $customerContactName
     * @param string $customerCountry
     * @param string $customerCountryName
     * @param string $customerEmail
     * @param string $customerMobilePhone
     * @param string $customerName
     * @param string $customerName2
     * @param string $customerPhone
     * @param int $customerPreAlert
     * @param string $customerZipCode
     * @param string $printAsSender
     */
    public function __construct(?string $customerAdress1 = null, ?string $customerAdress2 = null, ?string $customerCity = null, ?string $customerCivility = null, ?string $customerContactName = null, ?string $customerCountry = null, ?string $customerCountryName = null, ?string $customerEmail = null, ?string $customerMobilePhone = null, ?string $customerName = null, ?string $customerName2 = null, ?string $customerPhone = null, ?int $customerPreAlert = null, ?string $customerZipCode = null, ?string $printAsSender = null)
    {
        $this
            ->setCustomerAdress1($customerAdress1)
            ->setCustomerAdress2($customerAdress2)
            ->setCustomerCity($customerCity)
            ->setCustomerCivility($customerCivility)
            ->setCustomerContactName($customerContactName)
            ->setCustomerCountry($customerCountry)
            ->setCustomerCountryName($customerCountryName)
            ->setCustomerEmail($customerEmail)
            ->setCustomerMobilePhone($customerMobilePhone)
            ->setCustomerName($customerName)
            ->setCustomerName2($customerName2)
            ->setCustomerPhone($customerPhone)
            ->setCustomerPreAlert($customerPreAlert)
            ->setCustomerZipCode($customerZipCode)
            ->setPrintAsSender($printAsSender);
    }
    /**
     * Get customerAdress1 value
     * @return string|null
     */
    public function getCustomerAdress1(): ?string
    {
        return $this->customerAdress1;
    }
    /**
     * Set customerAdress1 value
     * @param string $customerAdress1
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerAdress1(?string $customerAdress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAdress1) && !is_string($customerAdress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAdress1, true), gettype($customerAdress1)), __LINE__);
        }
        $this->customerAdress1 = $customerAdress1;
        
        return $this;
    }
    /**
     * Get customerAdress2 value
     * @return string|null
     */
    public function getCustomerAdress2(): ?string
    {
        return $this->customerAdress2;
    }
    /**
     * Set customerAdress2 value
     * @param string $customerAdress2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerAdress2(?string $customerAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAdress2) && !is_string($customerAdress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAdress2, true), gettype($customerAdress2)), __LINE__);
        }
        $this->customerAdress2 = $customerAdress2;
        
        return $this;
    }
    /**
     * Get customerCity value
     * @return string|null
     */
    public function getCustomerCity(): ?string
    {
        return $this->customerCity;
    }
    /**
     * Set customerCity value
     * @param string $customerCity
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerCity(?string $customerCity = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCity) && !is_string($customerCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCity, true), gettype($customerCity)), __LINE__);
        }
        $this->customerCity = $customerCity;
        
        return $this;
    }
    /**
     * Get customerCivility value
     * @return string|null
     */
    public function getCustomerCivility(): ?string
    {
        return $this->customerCivility;
    }
    /**
     * Set customerCivility value
     * @param string $customerCivility
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerCivility(?string $customerCivility = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCivility) && !is_string($customerCivility)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCivility, true), gettype($customerCivility)), __LINE__);
        }
        $this->customerCivility = $customerCivility;
        
        return $this;
    }
    /**
     * Get customerContactName value
     * @return string|null
     */
    public function getCustomerContactName(): ?string
    {
        return $this->customerContactName;
    }
    /**
     * Set customerContactName value
     * @param string $customerContactName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerContactName(?string $customerContactName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerContactName) && !is_string($customerContactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerContactName, true), gettype($customerContactName)), __LINE__);
        }
        $this->customerContactName = $customerContactName;
        
        return $this;
    }
    /**
     * Get customerCountry value
     * @return string|null
     */
    public function getCustomerCountry(): ?string
    {
        return $this->customerCountry;
    }
    /**
     * Set customerCountry value
     * @param string $customerCountry
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerCountry(?string $customerCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCountry) && !is_string($customerCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCountry, true), gettype($customerCountry)), __LINE__);
        }
        $this->customerCountry = $customerCountry;
        
        return $this;
    }
    /**
     * Get customerCountryName value
     * @return string|null
     */
    public function getCustomerCountryName(): ?string
    {
        return $this->customerCountryName;
    }
    /**
     * Set customerCountryName value
     * @param string $customerCountryName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerCountryName(?string $customerCountryName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCountryName) && !is_string($customerCountryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCountryName, true), gettype($customerCountryName)), __LINE__);
        }
        $this->customerCountryName = $customerCountryName;
        
        return $this;
    }
    /**
     * Get customerEmail value
     * @return string|null
     */
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }
    /**
     * Set customerEmail value
     * @param string $customerEmail
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerEmail(?string $customerEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($customerEmail) && !is_string($customerEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerEmail, true), gettype($customerEmail)), __LINE__);
        }
        $this->customerEmail = $customerEmail;
        
        return $this;
    }
    /**
     * Get customerMobilePhone value
     * @return string|null
     */
    public function getCustomerMobilePhone(): ?string
    {
        return $this->customerMobilePhone;
    }
    /**
     * Set customerMobilePhone value
     * @param string $customerMobilePhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerMobilePhone(?string $customerMobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($customerMobilePhone) && !is_string($customerMobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerMobilePhone, true), gettype($customerMobilePhone)), __LINE__);
        }
        $this->customerMobilePhone = $customerMobilePhone;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get customerName2 value
     * @return string|null
     */
    public function getCustomerName2(): ?string
    {
        return $this->customerName2;
    }
    /**
     * Set customerName2 value
     * @param string $customerName2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerName2(?string $customerName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName2) && !is_string($customerName2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName2, true), gettype($customerName2)), __LINE__);
        }
        $this->customerName2 = $customerName2;
        
        return $this;
    }
    /**
     * Get customerPhone value
     * @return string|null
     */
    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }
    /**
     * Set customerPhone value
     * @param string $customerPhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerPhone(?string $customerPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($customerPhone) && !is_string($customerPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPhone, true), gettype($customerPhone)), __LINE__);
        }
        $this->customerPhone = $customerPhone;
        
        return $this;
    }
    /**
     * Get customerPreAlert value
     * @return int|null
     */
    public function getCustomerPreAlert(): ?int
    {
        return $this->customerPreAlert;
    }
    /**
     * Set customerPreAlert value
     * @param int $customerPreAlert
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerPreAlert(?int $customerPreAlert = null): self
    {
        // validation for constraint: int
        if (!is_null($customerPreAlert) && !(is_int($customerPreAlert) || ctype_digit($customerPreAlert))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerPreAlert, true), gettype($customerPreAlert)), __LINE__);
        }
        $this->customerPreAlert = $customerPreAlert;
        
        return $this;
    }
    /**
     * Get customerZipCode value
     * @return string|null
     */
    public function getCustomerZipCode(): ?string
    {
        return $this->customerZipCode;
    }
    /**
     * Set customerZipCode value
     * @param string $customerZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setCustomerZipCode(?string $customerZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($customerZipCode) && !is_string($customerZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerZipCode, true), gettype($customerZipCode)), __LINE__);
        }
        $this->customerZipCode = $customerZipCode;
        
        return $this;
    }
    /**
     * Get printAsSender value
     * @return string|null
     */
    public function getPrintAsSender(): ?string
    {
        return $this->printAsSender;
    }
    /**
     * Set printAsSender value
     * @param string $printAsSender
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
     */
    public function setPrintAsSender(?string $printAsSender = null): self
    {
        // validation for constraint: string
        if (!is_null($printAsSender) && !is_string($printAsSender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printAsSender, true), gettype($printAsSender)), __LINE__);
        }
        $this->printAsSender = $printAsSender;
        
        return $this;
    }
}
