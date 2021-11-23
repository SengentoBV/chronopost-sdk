<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRoutingResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:getRoutingResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiGetRoutingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting $return = null;
    /**
     * Constructor method for getRoutingResponse
     * @uses ChronoApiGetRoutingResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRoutingResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
