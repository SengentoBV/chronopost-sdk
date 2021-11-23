<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevement Structs
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevement
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRechercherContraintesEnlevement extends AbstractStructBase
{
    /**
     * The country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country = null;
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
     * Constructor method for rechercherContraintesEnlevement
     * @uses ChronoApiRechercherContraintesEnlevement::setCountry()
     * @uses ChronoApiRechercherContraintesEnlevement::setZipCode()
     * @uses ChronoApiRechercherContraintesEnlevement::setCity()
     * @param string $country
     * @param string $zipCode
     * @param string $city
     */
    public function __construct(?string $country = null, ?string $zipCode = null, ?string $city = null)
    {
        $this
            ->setCountry($country)
            ->setZipCode($zipCode)
            ->setCity($city);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRechercherContraintesEnlevement
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRechercherContraintesEnlevement
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRechercherContraintesEnlevement
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
}
