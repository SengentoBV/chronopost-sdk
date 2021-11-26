<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresseDestinataire Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiAdresseDestinataire extends AbstractStructBase
{
    /**
     * The adresse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresse = null;
    /**
     * The adresseSuite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresseSuite = null;
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
     * The digicode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $digicode = null;
    /**
     * The etage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $etage = null;
    /**
     * The mail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mail = null;
    /**
     * The nom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nom = null;
    /**
     * The poids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $poids = null;
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
     * The referenceDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $referenceDestinataire = null;
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
     * Constructor method for adresseDestinataire
     * @uses ChronoApiAdresseDestinataire::setAdresse()
     * @uses ChronoApiAdresseDestinataire::setAdresseSuite()
     * @uses ChronoApiAdresseDestinataire::setCodePays()
     * @uses ChronoApiAdresseDestinataire::setCodePostal()
     * @uses ChronoApiAdresseDestinataire::setDigicode()
     * @uses ChronoApiAdresseDestinataire::setEtage()
     * @uses ChronoApiAdresseDestinataire::setMail()
     * @uses ChronoApiAdresseDestinataire::setNom()
     * @uses ChronoApiAdresseDestinataire::setPoids()
     * @uses ChronoApiAdresseDestinataire::setPrenom()
     * @uses ChronoApiAdresseDestinataire::setRaisonSociale()
     * @uses ChronoApiAdresseDestinataire::setReferenceDestinataire()
     * @uses ChronoApiAdresseDestinataire::setTelephone()
     * @uses ChronoApiAdresseDestinataire::setVille()
     * @param string $adresse
     * @param string $adresseSuite
     * @param string $codePays
     * @param string $codePostal
     * @param string $digicode
     * @param string $etage
     * @param string $mail
     * @param string $nom
     * @param float $poids
     * @param string $prenom
     * @param string $raisonSociale
     * @param string $referenceDestinataire
     * @param string $telephone
     * @param string $ville
     */
    public function __construct(?string $adresse = null, ?string $adresseSuite = null, ?string $codePays = null, ?string $codePostal = null, ?string $digicode = null, ?string $etage = null, ?string $mail = null, ?string $nom = null, ?float $poids = null, ?string $prenom = null, ?string $raisonSociale = null, ?string $referenceDestinataire = null, ?string $telephone = null, ?string $ville = null)
    {
        $this
            ->setAdresse($adresse)
            ->setAdresseSuite($adresseSuite)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setDigicode($digicode)
            ->setEtage($etage)
            ->setMail($mail)
            ->setNom($nom)
            ->setPoids($poids)
            ->setPrenom($prenom)
            ->setRaisonSociale($raisonSociale)
            ->setReferenceDestinataire($referenceDestinataire)
            ->setTelephone($telephone)
            ->setVille($ville);
    }
    /**
     * Get adresse value
     * @return string|null
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }
    /**
     * Set adresse value
     * @param string $adresse
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
     */
    public function setAdresse(?string $adresse = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse) && !is_string($adresse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse, true), gettype($adresse)), __LINE__);
        }
        $this->adresse = $adresse;
        
        return $this;
    }
    /**
     * Get adresseSuite value
     * @return string|null
     */
    public function getAdresseSuite(): ?string
    {
        return $this->adresseSuite;
    }
    /**
     * Set adresseSuite value
     * @param string $adresseSuite
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
     */
    public function setAdresseSuite(?string $adresseSuite = null): self
    {
        // validation for constraint: string
        if (!is_null($adresseSuite) && !is_string($adresseSuite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresseSuite, true), gettype($adresseSuite)), __LINE__);
        }
        $this->adresseSuite = $adresseSuite;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
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
     * Get digicode value
     * @return string|null
     */
    public function getDigicode(): ?string
    {
        return $this->digicode;
    }
    /**
     * Set digicode value
     * @param string $digicode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
     */
    public function setDigicode(?string $digicode = null): self
    {
        // validation for constraint: string
        if (!is_null($digicode) && !is_string($digicode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digicode, true), gettype($digicode)), __LINE__);
        }
        $this->digicode = $digicode;
        
        return $this;
    }
    /**
     * Get etage value
     * @return string|null
     */
    public function getEtage(): ?string
    {
        return $this->etage;
    }
    /**
     * Set etage value
     * @param string $etage
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
     */
    public function setEtage(?string $etage = null): self
    {
        // validation for constraint: string
        if (!is_null($etage) && !is_string($etage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etage, true), gettype($etage)), __LINE__);
        }
        $this->etage = $etage;
        
        return $this;
    }
    /**
     * Get mail value
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }
    /**
     * Set mail value
     * @param string $mail
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
     */
    public function setMail(?string $mail = null): self
    {
        // validation for constraint: string
        if (!is_null($mail) && !is_string($mail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mail, true), gettype($mail)), __LINE__);
        }
        $this->mail = $mail;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
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
     * Get referenceDestinataire value
     * @return string|null
     */
    public function getReferenceDestinataire(): ?string
    {
        return $this->referenceDestinataire;
    }
    /**
     * Set referenceDestinataire value
     * @param string $referenceDestinataire
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
     */
    public function setReferenceDestinataire(?string $referenceDestinataire = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceDestinataire) && !is_string($referenceDestinataire)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceDestinataire, true), gettype($referenceDestinataire)), __LINE__);
        }
        $this->referenceDestinataire = $referenceDestinataire;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
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
