<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmDeliverySlotV2Response Structs
 * Meta information extracted from the WSDL
 * - type: tns:confirmDeliverySlotV2Response
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiConfirmDeliverySlotV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2 $return = null;
    /**
     * Constructor method for confirmDeliverySlotV2Response
     * @uses ChronoApiConfirmDeliverySlotV2Response::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2 $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2 $return
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlotV2Response
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
