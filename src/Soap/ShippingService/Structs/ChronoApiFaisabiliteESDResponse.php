<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESDResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESDResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiFaisabiliteESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultFaisabiliteESD|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultFaisabiliteESD $return = null;
    /**
     * Constructor method for faisabiliteESDResponse
     * @uses ChronoApiFaisabiliteESDResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultFaisabiliteESD $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultFaisabiliteESD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultFaisabiliteESD|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultFaisabiliteESD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultFaisabiliteESD $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiFaisabiliteESDResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultFaisabiliteESD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
