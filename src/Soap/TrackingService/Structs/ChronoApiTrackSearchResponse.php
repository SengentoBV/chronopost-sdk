<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearchResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:trackSearchResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiTrackSearchResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch $return = null;
    /**
     * Constructor method for trackSearchResponse
     * @uses ChronoApiTrackSearchResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch $return
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearchResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
