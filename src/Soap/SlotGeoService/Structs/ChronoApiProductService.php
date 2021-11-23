<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for productService Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiProductService extends AbstractStructBase
{
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * Constructor method for productService
     * @uses ChronoApiProductService::setProductCode()
     * @uses ChronoApiProductService::setServiceCode()
     * @param string $productCode
     * @param string $serviceCode
     */
    public function __construct(?string $productCode = null, ?string $serviceCode = null)
    {
        $this
            ->setProductCode($productCode)
            ->setServiceCode($serviceCode);
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
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService
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
     * Get serviceCode value
     * @return string|null
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }
    /**
     * Set serviceCode value
     * @param string $serviceCode
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;
        
        return $this;
    }
}
