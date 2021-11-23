<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODWithSenderRefResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:searchPODWithSenderRefResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSearchPODWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPODWithSenderRef|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPODWithSenderRef $return = null;
    /**
     * Constructor method for searchPODWithSenderRefResponse
     * @uses ChronoApiSearchPODWithSenderRefResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPODWithSenderRef $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPODWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPODWithSenderRef|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPODWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPODWithSenderRef $return
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRefResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPODWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
