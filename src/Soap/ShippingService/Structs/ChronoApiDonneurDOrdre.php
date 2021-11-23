<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for donneurDOrdre Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiDonneurDOrdre extends AbstractStructBase
{
    /**
     * The autreTelephone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $autreTelephone = null;
    /**
     * The batiment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $batiment = null;
    /**
     * The codeCivilite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeCivilite = null;
    /**
     * The codeNaf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeNaf = null;
    /**
     * The codePays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codePays = null;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codePostal = null;
    /**
     * The EMail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EMail = null;
    /**
     * The fax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fax = null;
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
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service = null;
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
     * The voie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $voie = null;
    /**
     * Constructor method for donneurDOrdre
     * @uses ChronoApiDonneurDOrdre::setAutreTelephone()
     * @uses ChronoApiDonneurDOrdre::setBatiment()
     * @uses ChronoApiDonneurDOrdre::setCodeCivilite()
     * @uses ChronoApiDonneurDOrdre::setCodeNaf()
     * @uses ChronoApiDonneurDOrdre::setCodePays()
     * @uses ChronoApiDonneurDOrdre::setCodePostal()
     * @uses ChronoApiDonneurDOrdre::setEMail()
     * @uses ChronoApiDonneurDOrdre::setFax()
     * @uses ChronoApiDonneurDOrdre::setLieuDit()
     * @uses ChronoApiDonneurDOrdre::setNom()
     * @uses ChronoApiDonneurDOrdre::setPrenom()
     * @uses ChronoApiDonneurDOrdre::setRaisonSociale()
     * @uses ChronoApiDonneurDOrdre::setService()
     * @uses ChronoApiDonneurDOrdre::setTelephone()
     * @uses ChronoApiDonneurDOrdre::setVille()
     * @uses ChronoApiDonneurDOrdre::setVoie()
     * @param string $autreTelephone
     * @param string $batiment
     * @param string $codeCivilite
     * @param string $codeNaf
     * @param string $codePays
     * @param string $codePostal
     * @param string $eMail
     * @param string $fax
     * @param string $lieuDit
     * @param string $nom
     * @param string $prenom
     * @param string $raisonSociale
     * @param string $service
     * @param string $telephone
     * @param string $ville
     * @param string $voie
     */
    public function __construct(?string $autreTelephone = null, ?string $batiment = null, ?string $codeCivilite = null, ?string $codeNaf = null, ?string $codePays = null, ?string $codePostal = null, ?string $eMail = null, ?string $fax = null, ?string $lieuDit = null, ?string $nom = null, ?string $prenom = null, ?string $raisonSociale = null, ?string $service = null, ?string $telephone = null, ?string $ville = null, ?string $voie = null)
    {
        $this
            ->setAutreTelephone($autreTelephone)
            ->setBatiment($batiment)
            ->setCodeCivilite($codeCivilite)
            ->setCodeNaf($codeNaf)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setEMail($eMail)
            ->setFax($fax)
            ->setLieuDit($lieuDit)
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setRaisonSociale($raisonSociale)
            ->setService($service)
            ->setTelephone($telephone)
            ->setVille($ville)
            ->setVoie($voie);
    }
    /**
     * Get autreTelephone value
     * @return string|null
     */
    public function getAutreTelephone(): ?string
    {
        return $this->autreTelephone;
    }
    /**
     * Set autreTelephone value
     * @param string $autreTelephone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
     */
    public function setAutreTelephone(?string $autreTelephone = null): self
    {
        // validation for constraint: string
        if (!is_null($autreTelephone) && !is_string($autreTelephone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autreTelephone, true), gettype($autreTelephone)), __LINE__);
        }
        $this->autreTelephone = $autreTelephone;
        
        return $this;
    }
    /**
     * Get batiment value
     * @return string|null
     */
    public function getBatiment(): ?string
    {
        return $this->batiment;
    }
    /**
     * Set batiment value
     * @param string $batiment
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
     */
    public function setBatiment(?string $batiment = null): self
    {
        // validation for constraint: string
        if (!is_null($batiment) && !is_string($batiment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($batiment, true), gettype($batiment)), __LINE__);
        }
        $this->batiment = $batiment;
        
        return $this;
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
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
     * Get codeNaf value
     * @return string|null
     */
    public function getCodeNaf(): ?string
    {
        return $this->codeNaf;
    }
    /**
     * Set codeNaf value
     * @param string $codeNaf
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
     */
    public function setCodeNaf(?string $codeNaf = null): self
    {
        // validation for constraint: string
        if (!is_null($codeNaf) && !is_string($codeNaf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeNaf, true), gettype($codeNaf)), __LINE__);
        }
        $this->codeNaf = $codeNaf;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
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
     * Get EMail value
     * @return string|null
     */
    public function getEMail(): ?string
    {
        return $this->EMail;
    }
    /**
     * Set EMail value
     * @param string $eMail
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
     */
    public function setEMail(?string $eMail = null): self
    {
        // validation for constraint: string
        if (!is_null($eMail) && !is_string($eMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eMail, true), gettype($eMail)), __LINE__);
        }
        $this->EMail = $eMail;
        
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
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
     * Get service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
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
    /**
     * Get voie value
     * @return string|null
     */
    public function getVoie(): ?string
    {
        return $this->voie;
    }
    /**
     * Set voie value
     * @param string $voie
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
     */
    public function setVoie(?string $voie = null): self
    {
        // validation for constraint: string
        if (!is_null($voie) && !is_string($voie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voie, true), gettype($voie)), __LINE__);
        }
        $this->voie = $voie;
        
        return $this;
    }
}
