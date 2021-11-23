<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnlyResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnlyResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiShippingWithESDOnlyResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue $return = null;
    /**
     * Constructor method for shippingWithESDOnlyResponse
     * @uses ChronoApiShippingWithESDOnlyResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnlyResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
