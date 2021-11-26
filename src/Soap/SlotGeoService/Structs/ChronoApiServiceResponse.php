<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceResponse Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiServiceResponse extends ChronoApiWsResponse
{
    /**
     * The productService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService $productService = null;
    /**
     * Constructor method for serviceResponse
     * @uses ChronoApiServiceResponse::setProductService()
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService $productService
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService $productService = null)
    {
        $this
            ->setProductService($productService);
    }
    /**
     * Get productService value
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService|null
     */
    public function getProductService(): ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService
    {
        return $this->productService;
    }
    /**
     * Set productService value
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService $productService
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse
     */
    public function setProductService(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductService $productService = null): self
    {
        $this->productService = $productService;
        
        return $this;
    }
}
