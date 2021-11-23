<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tourneeComplete Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiTourneeComplete extends ChronoApiTournee
{
    /**
     * The codeTourneeMaitre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeTourneeMaitre = null;
    /**
     * The codeTypeTournee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeTypeTournee = null;
    /**
     * The coutMensuelBatiment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $coutMensuelBatiment = null;
    /**
     * The cubage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cubage = null;
    /**
     * The cubageDistri
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cubageDistri = null;
    /**
     * The detailPrestation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $detailPrestation = null;
    /**
     * The heureTheoriqueRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $heureTheoriqueRetour = null;
    /**
     * The idMoyenPropre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idMoyenPropre = null;
    /**
     * The idSecteur
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idSecteur = null;
    /**
     * The idSousTraitant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idSousTraitant = null;
    /**
     * The idVehicule
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idVehicule = null;
    /**
     * The picking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $picking = null;
    /**
     * The planDistri
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $planDistri = null;
    /**
     * The posteComptable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $posteComptable = null;
    /**
     * The pourcentageCoChargement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pourcentageCoChargement = null;
    /**
     * The qualification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $qualification = null;
    /**
     * The spot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $spot = null;
    /**
     * The trigrammeAgence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $trigrammeAgence = null;
    /**
     * The typeTournee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typeTournee = null;
    /**
     * The zone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zone = null;
    /**
     * Constructor method for tourneeComplete
     * @uses ChronoApiTourneeComplete::setCodeTourneeMaitre()
     * @uses ChronoApiTourneeComplete::setCodeTypeTournee()
     * @uses ChronoApiTourneeComplete::setCoutMensuelBatiment()
     * @uses ChronoApiTourneeComplete::setCubage()
     * @uses ChronoApiTourneeComplete::setCubageDistri()
     * @uses ChronoApiTourneeComplete::setDetailPrestation()
     * @uses ChronoApiTourneeComplete::setHeureTheoriqueRetour()
     * @uses ChronoApiTourneeComplete::setIdMoyenPropre()
     * @uses ChronoApiTourneeComplete::setIdSecteur()
     * @uses ChronoApiTourneeComplete::setIdSousTraitant()
     * @uses ChronoApiTourneeComplete::setIdVehicule()
     * @uses ChronoApiTourneeComplete::setPicking()
     * @uses ChronoApiTourneeComplete::setPlanDistri()
     * @uses ChronoApiTourneeComplete::setPosteComptable()
     * @uses ChronoApiTourneeComplete::setPourcentageCoChargement()
     * @uses ChronoApiTourneeComplete::setQualification()
     * @uses ChronoApiTourneeComplete::setSpot()
     * @uses ChronoApiTourneeComplete::setTrigrammeAgence()
     * @uses ChronoApiTourneeComplete::setTypeTournee()
     * @uses ChronoApiTourneeComplete::setZone()
     * @param string $codeTourneeMaitre
     * @param string $codeTypeTournee
     * @param string $coutMensuelBatiment
     * @param string $cubage
     * @param string $cubageDistri
     * @param string $detailPrestation
     * @param string $heureTheoriqueRetour
     * @param string $idMoyenPropre
     * @param string $idSecteur
     * @param string $idSousTraitant
     * @param string $idVehicule
     * @param string $picking
     * @param string $planDistri
     * @param string $posteComptable
     * @param string $pourcentageCoChargement
     * @param string $qualification
     * @param string $spot
     * @param string $trigrammeAgence
     * @param string $typeTournee
     * @param string $zone
     */
    public function __construct(?string $codeTourneeMaitre = null, ?string $codeTypeTournee = null, ?string $coutMensuelBatiment = null, ?string $cubage = null, ?string $cubageDistri = null, ?string $detailPrestation = null, ?string $heureTheoriqueRetour = null, ?string $idMoyenPropre = null, ?string $idSecteur = null, ?string $idSousTraitant = null, ?string $idVehicule = null, ?string $picking = null, ?string $planDistri = null, ?string $posteComptable = null, ?string $pourcentageCoChargement = null, ?string $qualification = null, ?string $spot = null, ?string $trigrammeAgence = null, ?string $typeTournee = null, ?string $zone = null)
    {
        $this
            ->setCodeTourneeMaitre($codeTourneeMaitre)
            ->setCodeTypeTournee($codeTypeTournee)
            ->setCoutMensuelBatiment($coutMensuelBatiment)
            ->setCubage($cubage)
            ->setCubageDistri($cubageDistri)
            ->setDetailPrestation($detailPrestation)
            ->setHeureTheoriqueRetour($heureTheoriqueRetour)
            ->setIdMoyenPropre($idMoyenPropre)
            ->setIdSecteur($idSecteur)
            ->setIdSousTraitant($idSousTraitant)
            ->setIdVehicule($idVehicule)
            ->setPicking($picking)
            ->setPlanDistri($planDistri)
            ->setPosteComptable($posteComptable)
            ->setPourcentageCoChargement($pourcentageCoChargement)
            ->setQualification($qualification)
            ->setSpot($spot)
            ->setTrigrammeAgence($trigrammeAgence)
            ->setTypeTournee($typeTournee)
            ->setZone($zone);
    }
    /**
     * Get codeTourneeMaitre value
     * @return string|null
     */
    public function getCodeTourneeMaitre(): ?string
    {
        return $this->codeTourneeMaitre;
    }
    /**
     * Set codeTourneeMaitre value
     * @param string $codeTourneeMaitre
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setCodeTourneeMaitre(?string $codeTourneeMaitre = null): self
    {
        // validation for constraint: string
        if (!is_null($codeTourneeMaitre) && !is_string($codeTourneeMaitre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeTourneeMaitre, true), gettype($codeTourneeMaitre)), __LINE__);
        }
        $this->codeTourneeMaitre = $codeTourneeMaitre;
        
        return $this;
    }
    /**
     * Get codeTypeTournee value
     * @return string|null
     */
    public function getCodeTypeTournee(): ?string
    {
        return $this->codeTypeTournee;
    }
    /**
     * Set codeTypeTournee value
     * @param string $codeTypeTournee
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setCodeTypeTournee(?string $codeTypeTournee = null): self
    {
        // validation for constraint: string
        if (!is_null($codeTypeTournee) && !is_string($codeTypeTournee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeTypeTournee, true), gettype($codeTypeTournee)), __LINE__);
        }
        $this->codeTypeTournee = $codeTypeTournee;
        
        return $this;
    }
    /**
     * Get coutMensuelBatiment value
     * @return string|null
     */
    public function getCoutMensuelBatiment(): ?string
    {
        return $this->coutMensuelBatiment;
    }
    /**
     * Set coutMensuelBatiment value
     * @param string $coutMensuelBatiment
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setCoutMensuelBatiment(?string $coutMensuelBatiment = null): self
    {
        // validation for constraint: string
        if (!is_null($coutMensuelBatiment) && !is_string($coutMensuelBatiment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coutMensuelBatiment, true), gettype($coutMensuelBatiment)), __LINE__);
        }
        $this->coutMensuelBatiment = $coutMensuelBatiment;
        
        return $this;
    }
    /**
     * Get cubage value
     * @return string|null
     */
    public function getCubage(): ?string
    {
        return $this->cubage;
    }
    /**
     * Set cubage value
     * @param string $cubage
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setCubage(?string $cubage = null): self
    {
        // validation for constraint: string
        if (!is_null($cubage) && !is_string($cubage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cubage, true), gettype($cubage)), __LINE__);
        }
        $this->cubage = $cubage;
        
        return $this;
    }
    /**
     * Get cubageDistri value
     * @return string|null
     */
    public function getCubageDistri(): ?string
    {
        return $this->cubageDistri;
    }
    /**
     * Set cubageDistri value
     * @param string $cubageDistri
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setCubageDistri(?string $cubageDistri = null): self
    {
        // validation for constraint: string
        if (!is_null($cubageDistri) && !is_string($cubageDistri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cubageDistri, true), gettype($cubageDistri)), __LINE__);
        }
        $this->cubageDistri = $cubageDistri;
        
        return $this;
    }
    /**
     * Get detailPrestation value
     * @return string|null
     */
    public function getDetailPrestation(): ?string
    {
        return $this->detailPrestation;
    }
    /**
     * Set detailPrestation value
     * @param string $detailPrestation
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setDetailPrestation(?string $detailPrestation = null): self
    {
        // validation for constraint: string
        if (!is_null($detailPrestation) && !is_string($detailPrestation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPrestation, true), gettype($detailPrestation)), __LINE__);
        }
        $this->detailPrestation = $detailPrestation;
        
        return $this;
    }
    /**
     * Get heureTheoriqueRetour value
     * @return string|null
     */
    public function getHeureTheoriqueRetour(): ?string
    {
        return $this->heureTheoriqueRetour;
    }
    /**
     * Set heureTheoriqueRetour value
     * @param string $heureTheoriqueRetour
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setHeureTheoriqueRetour(?string $heureTheoriqueRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($heureTheoriqueRetour) && !is_string($heureTheoriqueRetour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($heureTheoriqueRetour, true), gettype($heureTheoriqueRetour)), __LINE__);
        }
        $this->heureTheoriqueRetour = $heureTheoriqueRetour;
        
        return $this;
    }
    /**
     * Get idMoyenPropre value
     * @return string|null
     */
    public function getIdMoyenPropre(): ?string
    {
        return $this->idMoyenPropre;
    }
    /**
     * Set idMoyenPropre value
     * @param string $idMoyenPropre
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setIdMoyenPropre(?string $idMoyenPropre = null): self
    {
        // validation for constraint: string
        if (!is_null($idMoyenPropre) && !is_string($idMoyenPropre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idMoyenPropre, true), gettype($idMoyenPropre)), __LINE__);
        }
        $this->idMoyenPropre = $idMoyenPropre;
        
        return $this;
    }
    /**
     * Get idSecteur value
     * @return string|null
     */
    public function getIdSecteur(): ?string
    {
        return $this->idSecteur;
    }
    /**
     * Set idSecteur value
     * @param string $idSecteur
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setIdSecteur(?string $idSecteur = null): self
    {
        // validation for constraint: string
        if (!is_null($idSecteur) && !is_string($idSecteur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idSecteur, true), gettype($idSecteur)), __LINE__);
        }
        $this->idSecteur = $idSecteur;
        
        return $this;
    }
    /**
     * Get idSousTraitant value
     * @return string|null
     */
    public function getIdSousTraitant(): ?string
    {
        return $this->idSousTraitant;
    }
    /**
     * Set idSousTraitant value
     * @param string $idSousTraitant
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setIdSousTraitant(?string $idSousTraitant = null): self
    {
        // validation for constraint: string
        if (!is_null($idSousTraitant) && !is_string($idSousTraitant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idSousTraitant, true), gettype($idSousTraitant)), __LINE__);
        }
        $this->idSousTraitant = $idSousTraitant;
        
        return $this;
    }
    /**
     * Get idVehicule value
     * @return string|null
     */
    public function getIdVehicule(): ?string
    {
        return $this->idVehicule;
    }
    /**
     * Set idVehicule value
     * @param string $idVehicule
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setIdVehicule(?string $idVehicule = null): self
    {
        // validation for constraint: string
        if (!is_null($idVehicule) && !is_string($idVehicule)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idVehicule, true), gettype($idVehicule)), __LINE__);
        }
        $this->idVehicule = $idVehicule;
        
        return $this;
    }
    /**
     * Get picking value
     * @return string|null
     */
    public function getPicking(): ?string
    {
        return $this->picking;
    }
    /**
     * Set picking value
     * @param string $picking
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setPicking(?string $picking = null): self
    {
        // validation for constraint: string
        if (!is_null($picking) && !is_string($picking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($picking, true), gettype($picking)), __LINE__);
        }
        $this->picking = $picking;
        
        return $this;
    }
    /**
     * Get planDistri value
     * @return string|null
     */
    public function getPlanDistri(): ?string
    {
        return $this->planDistri;
    }
    /**
     * Set planDistri value
     * @param string $planDistri
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setPlanDistri(?string $planDistri = null): self
    {
        // validation for constraint: string
        if (!is_null($planDistri) && !is_string($planDistri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planDistri, true), gettype($planDistri)), __LINE__);
        }
        $this->planDistri = $planDistri;
        
        return $this;
    }
    /**
     * Get posteComptable value
     * @return string|null
     */
    public function getPosteComptable(): ?string
    {
        return $this->posteComptable;
    }
    /**
     * Set posteComptable value
     * @param string $posteComptable
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setPosteComptable(?string $posteComptable = null): self
    {
        // validation for constraint: string
        if (!is_null($posteComptable) && !is_string($posteComptable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posteComptable, true), gettype($posteComptable)), __LINE__);
        }
        $this->posteComptable = $posteComptable;
        
        return $this;
    }
    /**
     * Get pourcentageCoChargement value
     * @return string|null
     */
    public function getPourcentageCoChargement(): ?string
    {
        return $this->pourcentageCoChargement;
    }
    /**
     * Set pourcentageCoChargement value
     * @param string $pourcentageCoChargement
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setPourcentageCoChargement(?string $pourcentageCoChargement = null): self
    {
        // validation for constraint: string
        if (!is_null($pourcentageCoChargement) && !is_string($pourcentageCoChargement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pourcentageCoChargement, true), gettype($pourcentageCoChargement)), __LINE__);
        }
        $this->pourcentageCoChargement = $pourcentageCoChargement;
        
        return $this;
    }
    /**
     * Get qualification value
     * @return string|null
     */
    public function getQualification(): ?string
    {
        return $this->qualification;
    }
    /**
     * Set qualification value
     * @param string $qualification
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setQualification(?string $qualification = null): self
    {
        // validation for constraint: string
        if (!is_null($qualification) && !is_string($qualification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qualification, true), gettype($qualification)), __LINE__);
        }
        $this->qualification = $qualification;
        
        return $this;
    }
    /**
     * Get spot value
     * @return string|null
     */
    public function getSpot(): ?string
    {
        return $this->spot;
    }
    /**
     * Set spot value
     * @param string $spot
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setSpot(?string $spot = null): self
    {
        // validation for constraint: string
        if (!is_null($spot) && !is_string($spot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spot, true), gettype($spot)), __LINE__);
        }
        $this->spot = $spot;
        
        return $this;
    }
    /**
     * Get trigrammeAgence value
     * @return string|null
     */
    public function getTrigrammeAgence(): ?string
    {
        return $this->trigrammeAgence;
    }
    /**
     * Set trigrammeAgence value
     * @param string $trigrammeAgence
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setTrigrammeAgence(?string $trigrammeAgence = null): self
    {
        // validation for constraint: string
        if (!is_null($trigrammeAgence) && !is_string($trigrammeAgence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trigrammeAgence, true), gettype($trigrammeAgence)), __LINE__);
        }
        $this->trigrammeAgence = $trigrammeAgence;
        
        return $this;
    }
    /**
     * Get typeTournee value
     * @return string|null
     */
    public function getTypeTournee(): ?string
    {
        return $this->typeTournee;
    }
    /**
     * Set typeTournee value
     * @param string $typeTournee
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setTypeTournee(?string $typeTournee = null): self
    {
        // validation for constraint: string
        if (!is_null($typeTournee) && !is_string($typeTournee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeTournee, true), gettype($typeTournee)), __LINE__);
        }
        $this->typeTournee = $typeTournee;
        
        return $this;
    }
    /**
     * Get zone value
     * @return string|null
     */
    public function getZone(): ?string
    {
        return $this->zone;
    }
    /**
     * Set zone value
     * @param string $zone
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
     */
    public function setZone(?string $zone = null): self
    {
        // validation for constraint: string
        if (!is_null($zone) && !is_string($zone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zone, true), gettype($zone)), __LINE__);
        }
        $this->zone = $zone;
        
        return $this;
    }
}
