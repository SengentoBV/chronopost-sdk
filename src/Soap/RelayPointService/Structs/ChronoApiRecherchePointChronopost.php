<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recherchePointChronopost Structs
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointChronopost
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRecherchePointChronopost extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weight = null;
    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shippingDate = null;
    /**
     * The maxPointChronopost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maxPointChronopost = null;
    /**
     * The maxDistanceSearch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maxDistanceSearch = null;
    /**
     * The holidayTolerant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $holidayTolerant = null;
    /**
     * Constructor method for recherchePointChronopost
     * @uses ChronoApiRecherchePointChronopost::setAccountNumber()
     * @uses ChronoApiRecherchePointChronopost::setPassword()
     * @uses ChronoApiRecherchePointChronopost::setAddress()
     * @uses ChronoApiRecherchePointChronopost::setZipCode()
     * @uses ChronoApiRecherchePointChronopost::setCity()
     * @uses ChronoApiRecherchePointChronopost::setCountryCode()
     * @uses ChronoApiRecherchePointChronopost::setType()
     * @uses ChronoApiRecherchePointChronopost::setProductCode()
     * @uses ChronoApiRecherchePointChronopost::setService()
     * @uses ChronoApiRecherchePointChronopost::setWeight()
     * @uses ChronoApiRecherchePointChronopost::setShippingDate()
     * @uses ChronoApiRecherchePointChronopost::setMaxPointChronopost()
     * @uses ChronoApiRecherchePointChronopost::setMaxDistanceSearch()
     * @uses ChronoApiRecherchePointChronopost::setHolidayTolerant()
     * @param string $accountNumber
     * @param string $password
     * @param string $address
     * @param string $zipCode
     * @param string $city
     * @param string $countryCode
     * @param string $type
     * @param string $productCode
     * @param string $service
     * @param string $weight
     * @param string $shippingDate
     * @param string $maxPointChronopost
     * @param string $maxDistanceSearch
     * @param string $holidayTolerant
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $address = null, ?string $zipCode = null, ?string $city = null, ?string $countryCode = null, ?string $type = null, ?string $productCode = null, ?string $service = null, ?string $weight = null, ?string $shippingDate = null, ?string $maxPointChronopost = null, ?string $maxDistanceSearch = null, ?string $holidayTolerant = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setAddress($address)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setType($type)
            ->setProductCode($productCode)
            ->setService($service)
            ->setWeight($weight)
            ->setShippingDate($shippingDate)
            ->setMaxPointChronopost($maxPointChronopost)
            ->setMaxDistanceSearch($maxDistanceSearch)
            ->setHolidayTolerant($holidayTolerant);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
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
     * Get address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
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
    /**
     * Get service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
        
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get shippingDate value
     * @return string|null
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }
    /**
     * Set shippingDate value
     * @param string $shippingDate
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;
        
        return $this;
    }
    /**
     * Get maxPointChronopost value
     * @return string|null
     */
    public function getMaxPointChronopost(): ?string
    {
        return $this->maxPointChronopost;
    }
    /**
     * Set maxPointChronopost value
     * @param string $maxPointChronopost
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setMaxPointChronopost(?string $maxPointChronopost = null): self
    {
        // validation for constraint: string
        if (!is_null($maxPointChronopost) && !is_string($maxPointChronopost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxPointChronopost, true), gettype($maxPointChronopost)), __LINE__);
        }
        $this->maxPointChronopost = $maxPointChronopost;
        
        return $this;
    }
    /**
     * Get maxDistanceSearch value
     * @return string|null
     */
    public function getMaxDistanceSearch(): ?string
    {
        return $this->maxDistanceSearch;
    }
    /**
     * Set maxDistanceSearch value
     * @param string $maxDistanceSearch
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setMaxDistanceSearch(?string $maxDistanceSearch = null): self
    {
        // validation for constraint: string
        if (!is_null($maxDistanceSearch) && !is_string($maxDistanceSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxDistanceSearch, true), gettype($maxDistanceSearch)), __LINE__);
        }
        $this->maxDistanceSearch = $maxDistanceSearch;
        
        return $this;
    }
    /**
     * Get holidayTolerant value
     * @return string|null
     */
    public function getHolidayTolerant(): ?string
    {
        return $this->holidayTolerant;
    }
    /**
     * Set holidayTolerant value
     * @param string $holidayTolerant
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost
     */
    public function setHolidayTolerant(?string $holidayTolerant = null): self
    {
        // validation for constraint: string
        if (!is_null($holidayTolerant) && !is_string($holidayTolerant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holidayTolerant, true), gettype($holidayTolerant)), __LINE__);
        }
        $this->holidayTolerant = $holidayTolerant;
        
        return $this;
    }
}
