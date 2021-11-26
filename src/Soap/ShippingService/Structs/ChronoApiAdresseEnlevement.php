<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresseEnlevement Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiAdresseEnlevement extends AbstractStructBase
{
    /**
     * The codeCivilite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeCivilite = null;
    /**
     * The codePays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codePays = null;
    /**
     * The codePorte
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codePorte = null;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codePostal = null;
    /**
     * The lieuDit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lieuDit = null;
    /**
     * The nom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nom = null;
    /**
     * The nomPersonneARencontrer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomPersonneARencontrer = null;
    /**
     * The numeroVoie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numeroVoie = null;
    /**
     * The porteAPorte
     * @var bool|null
     */
    protected ?bool $porteAPorte = null;
    /**
     * The prenom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $prenom = null;
    /**
     * The raisonSociale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $raisonSociale = null;
    /**
     * The residenceBatimentEtage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $residenceBatimentEtage = null;
    /**
     * The serviceDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceDirection = null;
    /**
     * The telephone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $telephone = null;
    /**
     * The ville
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ville = null;
    /**
     * Constructor method for adresseEnlevement
     * @uses ChronoApiAdresseEnlevement::setCodeCivilite()
     * @uses ChronoApiAdresseEnlevement::setCodePays()
     * @uses ChronoApiAdresseEnlevement::setCodePorte()
     * @uses ChronoApiAdresseEnlevement::setCodePostal()
     * @uses ChronoApiAdresseEnlevement::setLieuDit()
     * @uses ChronoApiAdresseEnlevement::setNom()
     * @uses ChronoApiAdresseEnlevement::setNomPersonneARencontrer()
     * @uses ChronoApiAdresseEnlevement::setNumeroVoie()
     * @uses ChronoApiAdresseEnlevement::setPorteAPorte()
     * @uses ChronoApiAdresseEnlevement::setPrenom()
     * @uses ChronoApiAdresseEnlevement::setRaisonSociale()
     * @uses ChronoApiAdresseEnlevement::setResidenceBatimentEtage()
     * @uses ChronoApiAdresseEnlevement::setServiceDirection()
     * @uses ChronoApiAdresseEnlevement::setTelephone()
     * @uses ChronoApiAdresseEnlevement::setVille()
     * @param string $codeCivilite
     * @param string $codePays
     * @param string $codePorte
     * @param string $codePostal
     * @param string $lieuDit
     * @param string $nom
     * @param string $nomPersonneARencontrer
     * @param string $numeroVoie
     * @param bool $porteAPorte
     * @param string $prenom
     * @param string $raisonSociale
     * @param string $residenceBatimentEtage
     * @param string $serviceDirection
     * @param string $telephone
     * @param string $ville
     */
    public function __construct(?string $codeCivilite = null, ?string $codePays = null, ?string $codePorte = null, ?string $codePostal = null, ?string $lieuDit = null, ?string $nom = null, ?string $nomPersonneARencontrer = null, ?string $numeroVoie = null, ?bool $porteAPorte = null, ?string $prenom = null, ?string $raisonSociale = null, ?string $residenceBatimentEtage = null, ?string $serviceDirection = null, ?string $telephone = null, ?string $ville = null)
    {
        $this
            ->setCodeCivilite($codeCivilite)
            ->setCodePays($codePays)
            ->setCodePorte($codePorte)
            ->setCodePostal($codePostal)
            ->setLieuDit($lieuDit)
            ->setNom($nom)
            ->setNomPersonneARencontrer($nomPersonneARencontrer)
            ->setNumeroVoie($numeroVoie)
            ->setPorteAPorte($porteAPorte)
            ->setPrenom($prenom)
            ->setRaisonSociale($raisonSociale)
            ->setResidenceBatimentEtage($residenceBatimentEtage)
            ->setServiceDirection($serviceDirection)
            ->setTelephone($telephone)
            ->setVille($ville);
    }
    /**
     * Get codeCivilite value
     * @return string|null
     */
    public function getCodeCivilite(): ?string
    {
        return $this->codeCivilite;
    }
    /**
     * Set codeCivilite value
     * @param string $codeCivilite
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setCodeCivilite(?string $codeCivilite = null): self
    {
        // validation for constraint: string
        if (!is_null($codeCivilite) && !is_string($codeCivilite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeCivilite, true), gettype($codeCivilite)), __LINE__);
        }
        $this->codeCivilite = $codeCivilite;
        
        return $this;
    }
    /**
     * Get codePays value
     * @return string|null
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }
    /**
     * Set codePays value
     * @param string $codePays
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setCodePays(?string $codePays = null): self
    {
        // validation for constraint: string
        if (!is_null($codePays) && !is_string($codePays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePays, true), gettype($codePays)), __LINE__);
        }
        $this->codePays = $codePays;
        
        return $this;
    }
    /**
     * Get codePorte value
     * @return string|null
     */
    public function getCodePorte(): ?string
    {
        return $this->codePorte;
    }
    /**
     * Set codePorte value
     * @param string $codePorte
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setCodePorte(?string $codePorte = null): self
    {
        // validation for constraint: string
        if (!is_null($codePorte) && !is_string($codePorte)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePorte, true), gettype($codePorte)), __LINE__);
        }
        $this->codePorte = $codePorte;
        
        return $this;
    }
    /**
     * Get codePostal value
     * @return string|null
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }
    /**
     * Set codePostal value
     * @param string $codePostal
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setCodePostal(?string $codePostal = null): self
    {
        // validation for constraint: string
        if (!is_null($codePostal) && !is_string($codePostal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePostal, true), gettype($codePostal)), __LINE__);
        }
        $this->codePostal = $codePostal;
        
        return $this;
    }
    /**
     * Get lieuDit value
     * @return string|null
     */
    public function getLieuDit(): ?string
    {
        return $this->lieuDit;
    }
    /**
     * Set lieuDit value
     * @param string $lieuDit
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setLieuDit(?string $lieuDit = null): self
    {
        // validation for constraint: string
        if (!is_null($lieuDit) && !is_string($lieuDit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lieuDit, true), gettype($lieuDit)), __LINE__);
        }
        $this->lieuDit = $lieuDit;
        
        return $this;
    }
    /**
     * Get nom value
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }
    /**
     * Set nom value
     * @param string $nom
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setNom(?string $nom = null): self
    {
        // validation for constraint: string
        if (!is_null($nom) && !is_string($nom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nom, true), gettype($nom)), __LINE__);
        }
        $this->nom = $nom;
        
        return $this;
    }
    /**
     * Get nomPersonneARencontrer value
     * @return string|null
     */
    public function getNomPersonneARencontrer(): ?string
    {
        return $this->nomPersonneARencontrer;
    }
    /**
     * Set nomPersonneARencontrer value
     * @param string $nomPersonneARencontrer
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setNomPersonneARencontrer(?string $nomPersonneARencontrer = null): self
    {
        // validation for constraint: string
        if (!is_null($nomPersonneARencontrer) && !is_string($nomPersonneARencontrer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomPersonneARencontrer, true), gettype($nomPersonneARencontrer)), __LINE__);
        }
        $this->nomPersonneARencontrer = $nomPersonneARencontrer;
        
        return $this;
    }
    /**
     * Get numeroVoie value
     * @return string|null
     */
    public function getNumeroVoie(): ?string
    {
        return $this->numeroVoie;
    }
    /**
     * Set numeroVoie value
     * @param string $numeroVoie
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setNumeroVoie(?string $numeroVoie = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroVoie) && !is_string($numeroVoie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroVoie, true), gettype($numeroVoie)), __LINE__);
        }
        $this->numeroVoie = $numeroVoie;
        
        return $this;
    }
    /**
     * Get porteAPorte value
     * @return bool|null
     */
    public function getPorteAPorte(): ?bool
    {
        return $this->porteAPorte;
    }
    /**
     * Set porteAPorte value
     * @param bool $porteAPorte
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setPorteAPorte(?bool $porteAPorte = null): self
    {
        // validation for constraint: boolean
        if (!is_null($porteAPorte) && !is_bool($porteAPorte)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($porteAPorte, true), gettype($porteAPorte)), __LINE__);
        }
        $this->porteAPorte = $porteAPorte;
        
        return $this;
    }
    /**
     * Get prenom value
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }
    /**
     * Set prenom value
     * @param string $prenom
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setPrenom(?string $prenom = null): self
    {
        // validation for constraint: string
        if (!is_null($prenom) && !is_string($prenom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prenom, true), gettype($prenom)), __LINE__);
        }
        $this->prenom = $prenom;
        
        return $this;
    }
    /**
     * Get raisonSociale value
     * @return string|null
     */
    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }
    /**
     * Set raisonSociale value
     * @param string $raisonSociale
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setRaisonSociale(?string $raisonSociale = null): self
    {
        // validation for constraint: string
        if (!is_null($raisonSociale) && !is_string($raisonSociale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($raisonSociale, true), gettype($raisonSociale)), __LINE__);
        }
        $this->raisonSociale = $raisonSociale;
        
        return $this;
    }
    /**
     * Get residenceBatimentEtage value
     * @return string|null
     */
    public function getResidenceBatimentEtage(): ?string
    {
        return $this->residenceBatimentEtage;
    }
    /**
     * Set residenceBatimentEtage value
     * @param string $residenceBatimentEtage
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setResidenceBatimentEtage(?string $residenceBatimentEtage = null): self
    {
        // validation for constraint: string
        if (!is_null($residenceBatimentEtage) && !is_string($residenceBatimentEtage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($residenceBatimentEtage, true), gettype($residenceBatimentEtage)), __LINE__);
        }
        $this->residenceBatimentEtage = $residenceBatimentEtage;
        
        return $this;
    }
    /**
     * Get serviceDirection value
     * @return string|null
     */
    public function getServiceDirection(): ?string
    {
        return $this->serviceDirection;
    }
    /**
     * Set serviceDirection value
     * @param string $serviceDirection
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setServiceDirection(?string $serviceDirection = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceDirection) && !is_string($serviceDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceDirection, true), gettype($serviceDirection)), __LINE__);
        }
        $this->serviceDirection = $serviceDirection;
        
        return $this;
    }
    /**
     * Get telephone value
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }
    /**
     * Set telephone value
     * @param string $telephone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setTelephone(?string $telephone = null): self
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telephone, true), gettype($telephone)), __LINE__);
        }
        $this->telephone = $telephone;
        
        return $this;
    }
    /**
     * Get ville value
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }
    /**
     * Set ville value
     * @param string $ville
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevement
     */
    public function setVille(?string $ville = null): self
    {
        // validation for constraint: string
        if (!is_null($ville) && !is_string($ville)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ville, true), gettype($ville)), __LINE__);
        }
        $this->ville = $ville;
        
        return $this;
    }
}
