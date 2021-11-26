<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelSkybillResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:cancelSkybillResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiCancelSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultCancelSkybill|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultCancelSkybill $return = null;
    /**
     * Constructor method for cancelSkybillResponse
     * @uses ChronoApiCancelSkybillResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultCancelSkybill $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultCancelSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultCancelSkybill|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultCancelSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultCancelSkybill $return
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiCancelSkybillResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultCancelSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
