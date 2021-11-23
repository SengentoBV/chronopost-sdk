<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNationalResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNationalResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiCreerEnlevementNationalResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational $return = null;
    /**
     * Constructor method for creerEnlevementNationalResponse
     * @uses ChronoApiCreerEnlevementNationalResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNationalResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
