<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateDeliveryTime Structs
 * Meta information extracted from the WSDL
 * - type: tns:calculateDeliveryTime
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiCalculateDeliveryTime extends AbstractStructBase
{
    /**
     * The depCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depCountryCode = null;
    /**
     * The depZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depZipCode = null;
    /**
     * The arrCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrCountryCode = null;
    /**
     * The arrZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrZipCode = null;
    /**
     * The arrCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrCity = null;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service = null;
    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shippingDate = null;
    /**
     * Constructor method for calculateDeliveryTime
     * @uses ChronoApiCalculateDeliveryTime::setDepCountryCode()
     * @uses ChronoApiCalculateDeliveryTime::setDepZipCode()
     * @uses ChronoApiCalculateDeliveryTime::setArrCountryCode()
     * @uses ChronoApiCalculateDeliveryTime::setArrZipCode()
     * @uses ChronoApiCalculateDeliveryTime::setArrCity()
     * @uses ChronoApiCalculateDeliveryTime::setProductCode()
     * @uses ChronoApiCalculateDeliveryTime::setType()
     * @uses ChronoApiCalculateDeliveryTime::setService()
     * @uses ChronoApiCalculateDeliveryTime::setShippingDate()
     * @param string $depCountryCode
     * @param string $depZipCode
     * @param string $arrCountryCode
     * @param string $arrZipCode
     * @param string $arrCity
     * @param string $productCode
     * @param string $type
     * @param string $service
     * @param string $shippingDate
     */
    public function __construct(?string $depCountryCode = null, ?string $depZipCode = null, ?string $arrCountryCode = null, ?string $arrZipCode = null, ?string $arrCity = null, ?string $productCode = null, ?string $type = null, ?string $service = null, ?string $shippingDate = null)
    {
        $this
            ->setDepCountryCode($depCountryCode)
            ->setDepZipCode($depZipCode)
            ->setArrCountryCode($arrCountryCode)
            ->setArrZipCode($arrZipCode)
            ->setArrCity($arrCity)
            ->setProductCode($productCode)
            ->setType($type)
            ->setService($service)
            ->setShippingDate($shippingDate);
    }
    /**
     * Get depCountryCode value
     * @return string|null
     */
    public function getDepCountryCode(): ?string
    {
        return $this->depCountryCode;
    }
    /**
     * Set depCountryCode value
     * @param string $depCountryCode
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime
     */
    public function setDepCountryCode(?string $depCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($depCountryCode) && !is_string($depCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depCountryCode, true), gettype($depCountryCode)), __LINE__);
        }
        $this->depCountryCode = $depCountryCode;
        
        return $this;
    }
    /**
     * Get depZipCode value
     * @return string|null
     */
    public function getDepZipCode(): ?string
    {
        return $this->depZipCode;
    }
    /**
     * Set depZipCode value
     * @param string $depZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime
     */
    public function setDepZipCode(?string $depZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($depZipCode) && !is_string($depZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depZipCode, true), gettype($depZipCode)), __LINE__);
        }
        $this->depZipCode = $depZipCode;
        
        return $this;
    }
    /**
     * Get arrCountryCode value
     * @return string|null
     */
    public function getArrCountryCode(): ?string
    {
        return $this->arrCountryCode;
    }
    /**
     * Set arrCountryCode value
     * @param string $arrCountryCode
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime
     */
    public function setArrCountryCode(?string $arrCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrCountryCode) && !is_string($arrCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrCountryCode, true), gettype($arrCountryCode)), __LINE__);
        }
        $this->arrCountryCode = $arrCountryCode;
        
        return $this;
    }
    /**
     * Get arrZipCode value
     * @return string|null
     */
    public function getArrZipCode(): ?string
    {
        return $this->arrZipCode;
    }
    /**
     * Set arrZipCode value
     * @param string $arrZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime
     */
    public function setArrZipCode(?string $arrZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrZipCode) && !is_string($arrZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrZipCode, true), gettype($arrZipCode)), __LINE__);
        }
        $this->arrZipCode = $arrZipCode;
        
        return $this;
    }
    /**
     * Get arrCity value
     * @return string|null
     */
    public function getArrCity(): ?string
    {
        return $this->arrCity;
    }
    /**
     * Set arrCity value
     * @param string $arrCity
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime
     */
    public function setArrCity(?string $arrCity = null): self
    {
        // validation for constraint: string
        if (!is_null($arrCity) && !is_string($arrCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrCity, true), gettype($arrCity)), __LINE__);
        }
        $this->arrCity = $arrCity;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime
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
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime
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
}
