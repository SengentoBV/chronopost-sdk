<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for assurance Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiAssurance extends AbstractStructBase
{
    /**
     * The plafond
     * @var float|null
     */
    protected ?float $plafond = null;
    /**
     * The taux
     * @var float|null
     */
    protected ?float $taux = null;
    /**
     * Constructor method for assurance
     * @uses ChronoApiAssurance::setPlafond()
     * @uses ChronoApiAssurance::setTaux()
     * @param float $plafond
     * @param float $taux
     */
    public function __construct(?float $plafond = null, ?float $taux = null)
    {
        $this
            ->setPlafond($plafond)
            ->setTaux($taux);
    }
    /**
     * Get plafond value
     * @return float|null
     */
    public function getPlafond(): ?float
    {
        return $this->plafond;
    }
    /**
     * Set plafond value
     * @param float $plafond
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance
     */
    public function setPlafond(?float $plafond = null): self
    {
        // validation for constraint: float
        if (!is_null($plafond) && !(is_float($plafond) || is_numeric($plafond))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($plafond, true), gettype($plafond)), __LINE__);
        }
        $this->plafond = $plafond;
        
        return $this;
    }
    /**
     * Get taux value
     * @return float|null
     */
    public function getTaux(): ?float
    {
        return $this->taux;
    }
    /**
     * Set taux value
     * @param float $taux
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiAssurance
     */
    public function setTaux(?float $taux = null): self
    {
        // validation for constraint: float
        if (!is_null($taux) && !(is_float($taux) || is_numeric($taux))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taux, true), gettype($taux)), __LINE__);
        }
        $this->taux = $taux;
        
        return $this;
    }
}
