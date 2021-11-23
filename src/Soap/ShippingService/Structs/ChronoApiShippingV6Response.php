<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV6Response Structs
 * Meta information extracted from the WSDL
 * - type: tns:shippingV6Response
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiShippingV6Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValueV3|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValueV3 $return = null;
    /**
     * Constructor method for shippingV6Response
     * @uses ChronoApiShippingV6Response::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValueV3 $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValueV3 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValueV3|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValueV3
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValueV3 $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV6Response
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValueV3 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
