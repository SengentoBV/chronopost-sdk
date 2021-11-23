<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceResponseV2 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiServiceResponseV2 extends ChronoApiWsResponse
{
    /**
     * The productServiceV2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductServiceV2|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductServiceV2 $productServiceV2 = null;
    /**
     * Constructor method for serviceResponseV2
     * @uses ChronoApiServiceResponseV2::setProductServiceV2()
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductServiceV2 $productServiceV2
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductServiceV2 $productServiceV2 = null)
    {
        $this
            ->setProductServiceV2($productServiceV2);
    }
    /**
     * Get productServiceV2 value
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductServiceV2|null
     */
    public function getProductServiceV2(): ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductServiceV2
    {
        return $this->productServiceV2;
    }
    /**
     * Set productServiceV2 value
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductServiceV2 $productServiceV2
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2
     */
    public function setProductServiceV2(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiProductServiceV2 $productServiceV2 = null): self
    {
        $this->productServiceV2 = $productServiceV2;
        
        return $this;
    }
}
