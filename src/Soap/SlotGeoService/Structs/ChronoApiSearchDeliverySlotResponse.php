<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchDeliverySlotResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:searchDeliverySlotResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSearchDeliverySlotResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiDeliverySlotResponse|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiDeliverySlotResponse $return = null;
    /**
     * Constructor method for searchDeliverySlotResponse
     * @uses ChronoApiSearchDeliverySlotResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiDeliverySlotResponse $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiDeliverySlotResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiDeliverySlotResponse|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiDeliverySlotResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiDeliverySlotResponse $return
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlotResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiDeliverySlotResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
