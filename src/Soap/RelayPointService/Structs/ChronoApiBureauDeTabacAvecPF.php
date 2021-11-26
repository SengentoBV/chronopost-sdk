<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bureauDeTabacAvecPF Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiBureauDeTabacAvecPF extends ChronoApiBureauDeTabacAvecCoord
{
    /**
     * The periodeDeFermeture1Debut
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodeDeFermeture1Debut = null;
    /**
     * The periodeDeFermeture1Fin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodeDeFermeture1Fin = null;
    /**
     * The periodeDeFermeture2Debut
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodeDeFermeture2Debut = null;
    /**
     * The periodeDeFermeture2Fin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodeDeFermeture2Fin = null;
    /**
     * The periodeDeFermeture3Debut
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodeDeFermeture3Debut = null;
    /**
     * The periodeDeFermeture3Fin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodeDeFermeture3Fin = null;
    /**
     * Constructor method for bureauDeTabacAvecPF
     * @uses ChronoApiBureauDeTabacAvecPF::setPeriodeDeFermeture1Debut()
     * @uses ChronoApiBureauDeTabacAvecPF::setPeriodeDeFermeture1Fin()
     * @uses ChronoApiBureauDeTabacAvecPF::setPeriodeDeFermeture2Debut()
     * @uses ChronoApiBureauDeTabacAvecPF::setPeriodeDeFermeture2Fin()
     * @uses ChronoApiBureauDeTabacAvecPF::setPeriodeDeFermeture3Debut()
     * @uses ChronoApiBureauDeTabacAvecPF::setPeriodeDeFermeture3Fin()
     * @param string $periodeDeFermeture1Debut
     * @param string $periodeDeFermeture1Fin
     * @param string $periodeDeFermeture2Debut
     * @param string $periodeDeFermeture2Fin
     * @param string $periodeDeFermeture3Debut
     * @param string $periodeDeFermeture3Fin
     */
    public function __construct(?string $periodeDeFermeture1Debut = null, ?string $periodeDeFermeture1Fin = null, ?string $periodeDeFermeture2Debut = null, ?string $periodeDeFermeture2Fin = null, ?string $periodeDeFermeture3Debut = null, ?string $periodeDeFermeture3Fin = null)
    {
        $this
            ->setPeriodeDeFermeture1Debut($periodeDeFermeture1Debut)
            ->setPeriodeDeFermeture1Fin($periodeDeFermeture1Fin)
            ->setPeriodeDeFermeture2Debut($periodeDeFermeture2Debut)
            ->setPeriodeDeFermeture2Fin($periodeDeFermeture2Fin)
            ->setPeriodeDeFermeture3Debut($periodeDeFermeture3Debut)
            ->setPeriodeDeFermeture3Fin($periodeDeFermeture3Fin);
    }
    /**
     * Get periodeDeFermeture1Debut value
     * @return string|null
     */
    public function getPeriodeDeFermeture1Debut(): ?string
    {
        return $this->periodeDeFermeture1Debut;
    }
    /**
     * Set periodeDeFermeture1Debut value
     * @param string $periodeDeFermeture1Debut
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiBureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture1Debut(?string $periodeDeFermeture1Debut = null): self
    {
        // validation for constraint: string
        if (!is_null($periodeDeFermeture1Debut) && !is_string($periodeDeFermeture1Debut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodeDeFermeture1Debut, true), gettype($periodeDeFermeture1Debut)), __LINE__);
        }
        $this->periodeDeFermeture1Debut = $periodeDeFermeture1Debut;
        
        return $this;
    }
    /**
     * Get periodeDeFermeture1Fin value
     * @return string|null
     */
    public function getPeriodeDeFermeture1Fin(): ?string
    {
        return $this->periodeDeFermeture1Fin;
    }
    /**
     * Set periodeDeFermeture1Fin value
     * @param string $periodeDeFermeture1Fin
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiBureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture1Fin(?string $periodeDeFermeture1Fin = null): self
    {
        // validation for constraint: string
        if (!is_null($periodeDeFermeture1Fin) && !is_string($periodeDeFermeture1Fin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodeDeFermeture1Fin, true), gettype($periodeDeFermeture1Fin)), __LINE__);
        }
        $this->periodeDeFermeture1Fin = $periodeDeFermeture1Fin;
        
        return $this;
    }
    /**
     * Get periodeDeFermeture2Debut value
     * @return string|null
     */
    public function getPeriodeDeFermeture2Debut(): ?string
    {
        return $this->periodeDeFermeture2Debut;
    }
    /**
     * Set periodeDeFermeture2Debut value
     * @param string $periodeDeFermeture2Debut
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiBureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture2Debut(?string $periodeDeFermeture2Debut = null): self
    {
        // validation for constraint: string
        if (!is_null($periodeDeFermeture2Debut) && !is_string($periodeDeFermeture2Debut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodeDeFermeture2Debut, true), gettype($periodeDeFermeture2Debut)), __LINE__);
        }
        $this->periodeDeFermeture2Debut = $periodeDeFermeture2Debut;
        
        return $this;
    }
    /**
     * Get periodeDeFermeture2Fin value
     * @return string|null
     */
    public function getPeriodeDeFermeture2Fin(): ?string
    {
        return $this->periodeDeFermeture2Fin;
    }
    /**
     * Set periodeDeFermeture2Fin value
     * @param string $periodeDeFermeture2Fin
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiBureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture2Fin(?string $periodeDeFermeture2Fin = null): self
    {
        // validation for constraint: string
        if (!is_null($periodeDeFermeture2Fin) && !is_string($periodeDeFermeture2Fin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodeDeFermeture2Fin, true), gettype($periodeDeFermeture2Fin)), __LINE__);
        }
        $this->periodeDeFermeture2Fin = $periodeDeFermeture2Fin;
        
        return $this;
    }
    /**
     * Get periodeDeFermeture3Debut value
     * @return string|null
     */
    public function getPeriodeDeFermeture3Debut(): ?string
    {
        return $this->periodeDeFermeture3Debut;
    }
    /**
     * Set periodeDeFermeture3Debut value
     * @param string $periodeDeFermeture3Debut
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiBureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture3Debut(?string $periodeDeFermeture3Debut = null): self
    {
        // validation for constraint: string
        if (!is_null($periodeDeFermeture3Debut) && !is_string($periodeDeFermeture3Debut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodeDeFermeture3Debut, true), gettype($periodeDeFermeture3Debut)), __LINE__);
        }
        $this->periodeDeFermeture3Debut = $periodeDeFermeture3Debut;
        
        return $this;
    }
    /**
     * Get periodeDeFermeture3Fin value
     * @return string|null
     */
    public function getPeriodeDeFermeture3Fin(): ?string
    {
        return $this->periodeDeFermeture3Fin;
    }
    /**
     * Set periodeDeFermeture3Fin value
     * @param string $periodeDeFermeture3Fin
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiBureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture3Fin(?string $periodeDeFermeture3Fin = null): self
    {
        // validation for constraint: string
        if (!is_null($periodeDeFermeture3Fin) && !is_string($periodeDeFermeture3Fin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodeDeFermeture3Fin, true), gettype($periodeDeFermeture3Fin)), __LINE__);
        }
        $this->periodeDeFermeture3Fin = $periodeDeFermeture3Fin;
        
        return $this;
    }
}
