<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmDeliverySlotResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:confirmDeliverySlotResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiConfirmDeliverySlotResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse $return = null;
    /**
     * Constructor method for confirmDeliverySlotResponse
     * @uses ChronoApiConfirmDeliverySlotResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse $return
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlotResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
