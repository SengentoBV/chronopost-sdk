<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesEsd Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiParticularitesEsd extends AbstractStructBase
{
    /**
     * The etudeDeFaisabilite
     * @var bool|null
     */
    protected ?bool $etudeDeFaisabilite = null;
    /**
     * The grosVolume
     * @var bool|null
     */
    protected ?bool $grosVolume = null;
    /**
     * The hauteur
     * @var int|null
     */
    protected ?int $hauteur = null;
    /**
     * The instructionsParticulieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $instructionsParticulieres = null;
    /**
     * The largeur
     * @var int|null
     */
    protected ?int $largeur = null;
    /**
     * The listeColisAnnonces
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $listeColisAnnonces = null;
    /**
     * The longueur
     * @var int|null
     */
    protected ?int $longueur = null;
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
     * The volume
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $volume = null;
    /**
     * Constructor method for particularitesEsd
     * @uses ChronoApiParticularitesEsd::setEtudeDeFaisabilite()
     * @uses ChronoApiParticularitesEsd::setGrosVolume()
     * @uses ChronoApiParticularitesEsd::setHauteur()
     * @uses ChronoApiParticularitesEsd::setInstructionsParticulieres()
     * @uses ChronoApiParticularitesEsd::setLargeur()
     * @uses ChronoApiParticularitesEsd::setListeColisAnnonces()
     * @uses ChronoApiParticularitesEsd::setLongueur()
     * @uses ChronoApiParticularitesEsd::setNombreEnvois()
     * @uses ChronoApiParticularitesEsd::setPoids()
     * @uses ChronoApiParticularitesEsd::setVolume()
     * @param bool $etudeDeFaisabilite
     * @param bool $grosVolume
     * @param int $hauteur
     * @param string $instructionsParticulieres
     * @param int $largeur
     * @param string $listeColisAnnonces
     * @param int $longueur
     * @param int $nombreEnvois
     * @param float $poids
     * @param string $volume
     */
    public function __construct(?bool $etudeDeFaisabilite = null, ?bool $grosVolume = null, ?int $hauteur = null, ?string $instructionsParticulieres = null, ?int $largeur = null, ?string $listeColisAnnonces = null, ?int $longueur = null, ?int $nombreEnvois = null, ?float $poids = null, ?string $volume = null)
    {
        $this
            ->setEtudeDeFaisabilite($etudeDeFaisabilite)
            ->setGrosVolume($grosVolume)
            ->setHauteur($hauteur)
            ->setInstructionsParticulieres($instructionsParticulieres)
            ->setLargeur($largeur)
            ->setListeColisAnnonces($listeColisAnnonces)
            ->setLongueur($longueur)
            ->setNombreEnvois($nombreEnvois)
            ->setPoids($poids)
            ->setVolume($volume);
    }
    /**
     * Get etudeDeFaisabilite value
     * @return bool|null
     */
    public function getEtudeDeFaisabilite(): ?bool
    {
        return $this->etudeDeFaisabilite;
    }
    /**
     * Set etudeDeFaisabilite value
     * @param bool $etudeDeFaisabilite
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
     */
    public function setEtudeDeFaisabilite(?bool $etudeDeFaisabilite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($etudeDeFaisabilite) && !is_bool($etudeDeFaisabilite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($etudeDeFaisabilite, true), gettype($etudeDeFaisabilite)), __LINE__);
        }
        $this->etudeDeFaisabilite = $etudeDeFaisabilite;
        
        return $this;
    }
    /**
     * Get grosVolume value
     * @return bool|null
     */
    public function getGrosVolume(): ?bool
    {
        return $this->grosVolume;
    }
    /**
     * Set grosVolume value
     * @param bool $grosVolume
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
     */
    public function setGrosVolume(?bool $grosVolume = null): self
    {
        // validation for constraint: boolean
        if (!is_null($grosVolume) && !is_bool($grosVolume)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($grosVolume, true), gettype($grosVolume)), __LINE__);
        }
        $this->grosVolume = $grosVolume;
        
        return $this;
    }
    /**
     * Get hauteur value
     * @return int|null
     */
    public function getHauteur(): ?int
    {
        return $this->hauteur;
    }
    /**
     * Set hauteur value
     * @param int $hauteur
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
     */
    public function setHauteur(?int $hauteur = null): self
    {
        // validation for constraint: int
        if (!is_null($hauteur) && !(is_int($hauteur) || ctype_digit($hauteur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hauteur, true), gettype($hauteur)), __LINE__);
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
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
     * @return int|null
     */
    public function getLargeur(): ?int
    {
        return $this->largeur;
    }
    /**
     * Set largeur value
     * @param int $largeur
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
     */
    public function setLargeur(?int $largeur = null): self
    {
        // validation for constraint: int
        if (!is_null($largeur) && !(is_int($largeur) || ctype_digit($largeur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largeur, true), gettype($largeur)), __LINE__);
        }
        $this->largeur = $largeur;
        
        return $this;
    }
    /**
     * Get listeColisAnnonces value
     * @return string|null
     */
    public function getListeColisAnnonces(): ?string
    {
        return $this->listeColisAnnonces;
    }
    /**
     * Set listeColisAnnonces value
     * @param string $listeColisAnnonces
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
     */
    public function setListeColisAnnonces(?string $listeColisAnnonces = null): self
    {
        // validation for constraint: string
        if (!is_null($listeColisAnnonces) && !is_string($listeColisAnnonces)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listeColisAnnonces, true), gettype($listeColisAnnonces)), __LINE__);
        }
        $this->listeColisAnnonces = $listeColisAnnonces;
        
        return $this;
    }
    /**
     * Get longueur value
     * @return int|null
     */
    public function getLongueur(): ?int
    {
        return $this->longueur;
    }
    /**
     * Set longueur value
     * @param int $longueur
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
     */
    public function setLongueur(?int $longueur = null): self
    {
        // validation for constraint: int
        if (!is_null($longueur) && !(is_int($longueur) || ctype_digit($longueur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($longueur, true), gettype($longueur)), __LINE__);
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
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
    /**
     * Get volume value
     * @return string|null
     */
    public function getVolume(): ?string
    {
        return $this->volume;
    }
    /**
     * Set volume value
     * @param string $volume
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
     */
    public function setVolume(?string $volume = null): self
    {
        // validation for constraint: string
        if (!is_null($volume) && !is_string($volume)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($volume, true), gettype($volume)), __LINE__);
        }
        $this->volume = $volume;
        
        return $this;
    }
}
