<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRechercheTourneeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult $return = null;
    /**
     * Constructor method for rechercheTourneeResponse
     * @uses ChronoApiRechercheTourneeResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult $return
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTourneeResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
