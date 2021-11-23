<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularites Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiParticularites extends AbstractStructBase
{
    /**
     * The hauteur
     * @var float|null
     */
    protected ?float $hauteur = null;
    /**
     * The instructionsParticulieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $instructionsParticulieres = null;
    /**
     * The largeur
     * @var float|null
     */
    protected ?float $largeur = null;
    /**
     * The longueur
     * @var float|null
     */
    protected ?float $longueur = null;
    /**
     * The nombreEnvois
     * @var int|null
     */
    protected ?int $nombreEnvois = null;
    /**
     * The poids
     * @var float|null
     */
    protected ?float $poids = null;
    /**
     * Constructor method for particularites
     * @uses ChronoApiParticularites::setHauteur()
     * @uses ChronoApiParticularites::setInstructionsParticulieres()
     * @uses ChronoApiParticularites::setLargeur()
     * @uses ChronoApiParticularites::setLongueur()
     * @uses ChronoApiParticularites::setNombreEnvois()
     * @uses ChronoApiParticularites::setPoids()
     * @param float $hauteur
     * @param string $instructionsParticulieres
     * @param float $largeur
     * @param float $longueur
     * @param int $nombreEnvois
     * @param float $poids
     */
    public function __construct(?float $hauteur = null, ?string $instructionsParticulieres = null, ?float $largeur = null, ?float $longueur = null, ?int $nombreEnvois = null, ?float $poids = null)
    {
        $this
            ->setHauteur($hauteur)
            ->setInstructionsParticulieres($instructionsParticulieres)
            ->setLargeur($largeur)
            ->setLongueur($longueur)
            ->setNombreEnvois($nombreEnvois)
            ->setPoids($poids);
    }
    /**
     * Get hauteur value
     * @return float|null
     */
    public function getHauteur(): ?float
    {
        return $this->hauteur;
    }
    /**
     * Set hauteur value
     * @param float $hauteur
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites
     */
    public function setHauteur(?float $hauteur = null): self
    {
        // validation for constraint: float
        if (!is_null($hauteur) && !(is_float($hauteur) || is_numeric($hauteur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hauteur, true), gettype($hauteur)), __LINE__);
        }
        $this->hauteur = $hauteur;
        
        return $this;
    }
    /**
     * Get instructionsParticulieres value
     * @return string|null
     */
    public function getInstructionsParticulieres(): ?string
    {
        return $this->instructionsParticulieres;
    }
    /**
     * Set instructionsParticulieres value
     * @param string $instructionsParticulieres
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites
     */
    public function setInstructionsParticulieres(?string $instructionsParticulieres = null): self
    {
        // validation for constraint: string
        if (!is_null($instructionsParticulieres) && !is_string($instructionsParticulieres)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructionsParticulieres, true), gettype($instructionsParticulieres)), __LINE__);
        }
        $this->instructionsParticulieres = $instructionsParticulieres;
        
        return $this;
    }
    /**
     * Get largeur value
     * @return float|null
     */
    public function getLargeur(): ?float
    {
        return $this->largeur;
    }
    /**
     * Set largeur value
     * @param float $largeur
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites
     */
    public function setLargeur(?float $largeur = null): self
    {
        // validation for constraint: float
        if (!is_null($largeur) && !(is_float($largeur) || is_numeric($largeur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($largeur, true), gettype($largeur)), __LINE__);
        }
        $this->largeur = $largeur;
        
        return $this;
    }
    /**
     * Get longueur value
     * @return float|null
     */
    public function getLongueur(): ?float
    {
        return $this->longueur;
    }
    /**
     * Set longueur value
     * @param float $longueur
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites
     */
    public function setLongueur(?float $longueur = null): self
    {
        // validation for constraint: float
        if (!is_null($longueur) && !(is_float($longueur) || is_numeric($longueur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longueur, true), gettype($longueur)), __LINE__);
        }
        $this->longueur = $longueur;
        
        return $this;
    }
    /**
     * Get nombreEnvois value
     * @return int|null
     */
    public function getNombreEnvois(): ?int
    {
        return $this->nombreEnvois;
    }
    /**
     * Set nombreEnvois value
     * @param int $nombreEnvois
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites
     */
    public function setNombreEnvois(?int $nombreEnvois = null): self
    {
        // validation for constraint: int
        if (!is_null($nombreEnvois) && !(is_int($nombreEnvois) || ctype_digit($nombreEnvois))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nombreEnvois, true), gettype($nombreEnvois)), __LINE__);
        }
        $this->nombreEnvois = $nombreEnvois;
        
        return $this;
    }
    /**
     * Get poids value
     * @return float|null
     */
    public function getPoids(): ?float
    {
        return $this->poids;
    }
    /**
     * Set poids value
     * @param float $poids
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites
     */
    public function setPoids(?float $poids = null): self
    {
        // validation for constraint: float
        if (!is_null($poids) && !(is_float($poids) || is_numeric($poids))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($poids, true), gettype($poids)), __LINE__);
        }
        $this->poids = $poids;
        
        return $this;
    }
}
