<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:searchPODResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSearchPODResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPOD|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPOD $return = null;
    /**
     * Constructor method for searchPODResponse
     * @uses ChronoApiSearchPODResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPOD $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPOD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPOD|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPOD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPOD $return
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPOD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
