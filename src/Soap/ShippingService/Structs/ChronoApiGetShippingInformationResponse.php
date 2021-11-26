<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformationResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformationResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiGetShippingInformationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo $return = null;
    /**
     * Constructor method for getShippingInformationResponse
     * @uses ChronoApiGetShippingInformationResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetShippingInformationResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
