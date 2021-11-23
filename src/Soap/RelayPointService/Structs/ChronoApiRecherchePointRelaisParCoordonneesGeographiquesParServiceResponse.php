<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * recherchePointRelaisParCoordonneesGeographiquesParServiceResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointRelaisParCoordonneesGeographiquesParServiceResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult $return = null;
    /**
     * Constructor method for
     * recherchePointRelaisParCoordonneesGeographiquesParServiceResponse
     * @uses ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult $return
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
