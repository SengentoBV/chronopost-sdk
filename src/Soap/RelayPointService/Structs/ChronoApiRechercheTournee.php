<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTournee Structs
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTournee
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRechercheTournee extends AbstractStructBase
{
    /**
     * The codeTournee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeTournee = null;
    /**
     * Constructor method for rechercheTournee
     * @uses ChronoApiRechercheTournee::setCodeTournee()
     * @param string $codeTournee
     */
    public function __construct(?string $codeTournee = null)
    {
        $this
            ->setCodeTournee($codeTournee);
    }
    /**
     * Get codeTournee value
     * @return string|null
     */
    public function getCodeTournee(): ?string
    {
        return $this->codeTournee;
    }
    /**
     * Set codeTournee value
     * @param string $codeTournee
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTournee
     */
    public function setCodeTournee(?string $codeTournee = null): self
    {
        // validation for constraint: string
        if (!is_null($codeTournee) && !is_string($codeTournee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeTournee, true), gettype($codeTournee)), __LINE__);
        }
        $this->codeTournee = $codeTournee;
        
        return $this;
    }
}
