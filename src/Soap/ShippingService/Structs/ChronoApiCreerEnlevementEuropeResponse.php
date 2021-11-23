<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEuropeResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEuropeResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiCreerEnlevementEuropeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultPickupOrCollectionRequest|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultPickupOrCollectionRequest $return = null;
    /**
     * Constructor method for creerEnlevementEuropeResponse
     * @uses ChronoApiCreerEnlevementEuropeResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultPickupOrCollectionRequest $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultPickupOrCollectionRequest $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultPickupOrCollectionRequest|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultPickupOrCollectionRequest
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultPickupOrCollectionRequest $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEuropeResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultPickupOrCollectionRequest $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
