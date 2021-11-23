<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiGetReservedSkybillWithTypeAndModeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillWithTypeValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillWithTypeValue $return = null;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeResponse
     * @uses ChronoApiGetReservedSkybillWithTypeAndModeResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillWithTypeValue $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillWithTypeValue|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillWithTypeValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillWithTypeValue $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
