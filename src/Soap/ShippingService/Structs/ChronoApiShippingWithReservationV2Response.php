<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationV2Response Structs
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationV2Response
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiShippingWithReservationV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValueV2|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValueV2 $return = null;
    /**
     * Constructor method for shippingWithReservationV2Response
     * @uses ChronoApiShippingWithReservationV2Response::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValueV2 $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValueV2|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValueV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValueV2 $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationV2Response
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValueV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
