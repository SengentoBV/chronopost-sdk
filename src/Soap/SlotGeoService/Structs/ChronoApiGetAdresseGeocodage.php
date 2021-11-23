<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdresseGeocodage Structs
 * Meta information extracted from the WSDL
 * - type: tns:getAdresseGeocodage
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiGetAdresseGeocodage extends AbstractStructBase
{
    /**
     * The adresse1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresse1 = null;
    /**
     * The adresse2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresse2 = null;
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
     * Constructor method for getAdresseGeocodage
     * @uses ChronoApiGetAdresseGeocodage::setAdresse1()
     * @uses ChronoApiGetAdresseGeocodage::setAdresse2()
     * @uses ChronoApiGetAdresseGeocodage::setZipCode()
     * @uses ChronoApiGetAdresseGeocodage::setCity()
     * @param string $adresse1
     * @param string $adresse2
     * @param string $zipCode
     * @param string $city
     */
    public function __construct(?string $adresse1 = null, ?string $adresse2 = null, ?string $zipCode = null, ?string $city = null)
    {
        $this
            ->setAdresse1($adresse1)
            ->setAdresse2($adresse2)
            ->setZipCode($zipCode)
            ->setCity($city);
    }
    /**
     * Get adresse1 value
     * @return string|null
     */
    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }
    /**
     * Set adresse1 value
     * @param string $adresse1
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodage
     */
    public function setAdresse1(?string $adresse1 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse1) && !is_string($adresse1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse1, true), gettype($adresse1)), __LINE__);
        }
        $this->adresse1 = $adresse1;
        
        return $this;
    }
    /**
     * Get adresse2 value
     * @return string|null
     */
    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }
    /**
     * Set adresse2 value
     * @param string $adresse2
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodage
     */
    public function setAdresse2(?string $adresse2 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse2) && !is_string($adresse2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse2, true), gettype($adresse2)), __LINE__);
        }
        $this->adresse2 = $adresse2;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodage
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
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodage
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
