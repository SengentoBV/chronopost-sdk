<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackWithSenderRefResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:trackWithSenderRefResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiTrackWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackWithSenderRef|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackWithSenderRef $return = null;
    /**
     * Constructor method for trackWithSenderRefResponse
     * @uses ChronoApiTrackWithSenderRefResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackWithSenderRef $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackWithSenderRef|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackWithSenderRef $return
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackWithSenderRefResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
