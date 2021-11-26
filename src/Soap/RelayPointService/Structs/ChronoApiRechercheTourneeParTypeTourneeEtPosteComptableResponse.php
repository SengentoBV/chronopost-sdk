<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * Structs
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRechercheTourneeParTypeTourneeEtPosteComptableResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult $return = null;
    /**
     * Constructor method for rechercheTourneeParTypeTourneeEtPosteComptableResponse
     * @uses ChronoApiRechercheTourneeParTypeTourneeEtPosteComptableResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult $return
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTourneeParTypeTourneeEtPosteComptableResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
