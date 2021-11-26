<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointChronopost Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiPointChronopost extends AbstractStructBase
{
    /**
     * The adresse1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresse1 = null;
    /**
     * The adresse2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresse2 = null;
    /**
     * The adresse3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresse3 = null;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codePostal = null;
    /**
     * The dateArriveColis
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateArriveColis = null;
    /**
     * The horairesOuvertureDimanche
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horairesOuvertureDimanche = null;
    /**
     * The horairesOuvertureJeudi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horairesOuvertureJeudi = null;
    /**
     * The horairesOuvertureLundi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horairesOuvertureLundi = null;
    /**
     * The horairesOuvertureMardi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horairesOuvertureMardi = null;
    /**
     * The horairesOuvertureMercredi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horairesOuvertureMercredi = null;
    /**
     * The horairesOuvertureSamedi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horairesOuvertureSamedi = null;
    /**
     * The horairesOuvertureVendredi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horairesOuvertureVendredi = null;
    /**
     * The horairesOuverturesFormates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horairesOuverturesFormates = null;
    /**
     * The identifiantChronopost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identifiantChronopost = null;
    /**
     * The localite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $localite = null;
    /**
     * The nomEnseigne
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomEnseigne = null;
    /**
     * The typeDePoint
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typeDePoint = null;
    /**
     * Constructor method for pointChronopost
     * @uses ChronoApiPointChronopost::setAdresse1()
     * @uses ChronoApiPointChronopost::setAdresse2()
     * @uses ChronoApiPointChronopost::setAdresse3()
     * @uses ChronoApiPointChronopost::setCodePostal()
     * @uses ChronoApiPointChronopost::setDateArriveColis()
     * @uses ChronoApiPointChronopost::setHorairesOuvertureDimanche()
     * @uses ChronoApiPointChronopost::setHorairesOuvertureJeudi()
     * @uses ChronoApiPointChronopost::setHorairesOuvertureLundi()
     * @uses ChronoApiPointChronopost::setHorairesOuvertureMardi()
     * @uses ChronoApiPointChronopost::setHorairesOuvertureMercredi()
     * @uses ChronoApiPointChronopost::setHorairesOuvertureSamedi()
     * @uses ChronoApiPointChronopost::setHorairesOuvertureVendredi()
     * @uses ChronoApiPointChronopost::setHorairesOuverturesFormates()
     * @uses ChronoApiPointChronopost::setIdentifiantChronopost()
     * @uses ChronoApiPointChronopost::setLocalite()
     * @uses ChronoApiPointChronopost::setNomEnseigne()
     * @uses ChronoApiPointChronopost::setTypeDePoint()
     * @param string $adresse1
     * @param string $adresse2
     * @param string $adresse3
     * @param string $codePostal
     * @param string $dateArriveColis
     * @param string $horairesOuvertureDimanche
     * @param string $horairesOuvertureJeudi
     * @param string $horairesOuvertureLundi
     * @param string $horairesOuvertureMardi
     * @param string $horairesOuvertureMercredi
     * @param string $horairesOuvertureSamedi
     * @param string $horairesOuvertureVendredi
     * @param string $horairesOuverturesFormates
     * @param string $identifiantChronopost
     * @param string $localite
     * @param string $nomEnseigne
     * @param string $typeDePoint
     */
    public function __construct(?string $adresse1 = null, ?string $adresse2 = null, ?string $adresse3 = null, ?string $codePostal = null, ?string $dateArriveColis = null, ?string $horairesOuvertureDimanche = null, ?string $horairesOuvertureJeudi = null, ?string $horairesOuvertureLundi = null, ?string $horairesOuvertureMardi = null, ?string $horairesOuvertureMercredi = null, ?string $horairesOuvertureSamedi = null, ?string $horairesOuvertureVendredi = null, ?string $horairesOuverturesFormates = null, ?string $identifiantChronopost = null, ?string $localite = null, ?string $nomEnseigne = null, ?string $typeDePoint = null)
    {
        $this
            ->setAdresse1($adresse1)
            ->setAdresse2($adresse2)
            ->setAdresse3($adresse3)
            ->setCodePostal($codePostal)
            ->setDateArriveColis($dateArriveColis)
            ->setHorairesOuvertureDimanche($horairesOuvertureDimanche)
            ->setHorairesOuvertureJeudi($horairesOuvertureJeudi)
            ->setHorairesOuvertureLundi($horairesOuvertureLundi)
            ->setHorairesOuvertureMardi($horairesOuvertureMardi)
            ->setHorairesOuvertureMercredi($horairesOuvertureMercredi)
            ->setHorairesOuvertureSamedi($horairesOuvertureSamedi)
            ->setHorairesOuvertureVendredi($horairesOuvertureVendredi)
            ->setHorairesOuverturesFormates($horairesOuverturesFormates)
            ->setIdentifiantChronopost($identifiantChronopost)
            ->setLocalite($localite)
            ->setNomEnseigne($nomEnseigne)
            ->setTypeDePoint($typeDePoint);
    }
    /**
     * Get adresse1 value
     * @return string|null
     */
    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }
    /**
     * Set adresse1 value
     * @param string $adresse1
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setAdresse1(?string $adresse1 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse1) && !is_string($adresse1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse1, true), gettype($adresse1)), __LINE__);
        }
        $this->adresse1 = $adresse1;
        
        return $this;
    }
    /**
     * Get adresse2 value
     * @return string|null
     */
    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }
    /**
     * Set adresse2 value
     * @param string $adresse2
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setAdresse2(?string $adresse2 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse2) && !is_string($adresse2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse2, true), gettype($adresse2)), __LINE__);
        }
        $this->adresse2 = $adresse2;
        
        return $this;
    }
    /**
     * Get adresse3 value
     * @return string|null
     */
    public function getAdresse3(): ?string
    {
        return $this->adresse3;
    }
    /**
     * Set adresse3 value
     * @param string $adresse3
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setAdresse3(?string $adresse3 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse3) && !is_string($adresse3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse3, true), gettype($adresse3)), __LINE__);
        }
        $this->adresse3 = $adresse3;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
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
     * Get dateArriveColis value
     * @return string|null
     */
    public function getDateArriveColis(): ?string
    {
        return $this->dateArriveColis;
    }
    /**
     * Set dateArriveColis value
     * @param string $dateArriveColis
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setDateArriveColis(?string $dateArriveColis = null): self
    {
        // validation for constraint: string
        if (!is_null($dateArriveColis) && !is_string($dateArriveColis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateArriveColis, true), gettype($dateArriveColis)), __LINE__);
        }
        $this->dateArriveColis = $dateArriveColis;
        
        return $this;
    }
    /**
     * Get horairesOuvertureDimanche value
     * @return string|null
     */
    public function getHorairesOuvertureDimanche(): ?string
    {
        return $this->horairesOuvertureDimanche;
    }
    /**
     * Set horairesOuvertureDimanche value
     * @param string $horairesOuvertureDimanche
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setHorairesOuvertureDimanche(?string $horairesOuvertureDimanche = null): self
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureDimanche) && !is_string($horairesOuvertureDimanche)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureDimanche, true), gettype($horairesOuvertureDimanche)), __LINE__);
        }
        $this->horairesOuvertureDimanche = $horairesOuvertureDimanche;
        
        return $this;
    }
    /**
     * Get horairesOuvertureJeudi value
     * @return string|null
     */
    public function getHorairesOuvertureJeudi(): ?string
    {
        return $this->horairesOuvertureJeudi;
    }
    /**
     * Set horairesOuvertureJeudi value
     * @param string $horairesOuvertureJeudi
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setHorairesOuvertureJeudi(?string $horairesOuvertureJeudi = null): self
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureJeudi) && !is_string($horairesOuvertureJeudi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureJeudi, true), gettype($horairesOuvertureJeudi)), __LINE__);
        }
        $this->horairesOuvertureJeudi = $horairesOuvertureJeudi;
        
        return $this;
    }
    /**
     * Get horairesOuvertureLundi value
     * @return string|null
     */
    public function getHorairesOuvertureLundi(): ?string
    {
        return $this->horairesOuvertureLundi;
    }
    /**
     * Set horairesOuvertureLundi value
     * @param string $horairesOuvertureLundi
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setHorairesOuvertureLundi(?string $horairesOuvertureLundi = null): self
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureLundi) && !is_string($horairesOuvertureLundi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureLundi, true), gettype($horairesOuvertureLundi)), __LINE__);
        }
        $this->horairesOuvertureLundi = $horairesOuvertureLundi;
        
        return $this;
    }
    /**
     * Get horairesOuvertureMardi value
     * @return string|null
     */
    public function getHorairesOuvertureMardi(): ?string
    {
        return $this->horairesOuvertureMardi;
    }
    /**
     * Set horairesOuvertureMardi value
     * @param string $horairesOuvertureMardi
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setHorairesOuvertureMardi(?string $horairesOuvertureMardi = null): self
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureMardi) && !is_string($horairesOuvertureMardi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureMardi, true), gettype($horairesOuvertureMardi)), __LINE__);
        }
        $this->horairesOuvertureMardi = $horairesOuvertureMardi;
        
        return $this;
    }
    /**
     * Get horairesOuvertureMercredi value
     * @return string|null
     */
    public function getHorairesOuvertureMercredi(): ?string
    {
        return $this->horairesOuvertureMercredi;
    }
    /**
     * Set horairesOuvertureMercredi value
     * @param string $horairesOuvertureMercredi
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setHorairesOuvertureMercredi(?string $horairesOuvertureMercredi = null): self
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureMercredi) && !is_string($horairesOuvertureMercredi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureMercredi, true), gettype($horairesOuvertureMercredi)), __LINE__);
        }
        $this->horairesOuvertureMercredi = $horairesOuvertureMercredi;
        
        return $this;
    }
    /**
     * Get horairesOuvertureSamedi value
     * @return string|null
     */
    public function getHorairesOuvertureSamedi(): ?string
    {
        return $this->horairesOuvertureSamedi;
    }
    /**
     * Set horairesOuvertureSamedi value
     * @param string $horairesOuvertureSamedi
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setHorairesOuvertureSamedi(?string $horairesOuvertureSamedi = null): self
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureSamedi) && !is_string($horairesOuvertureSamedi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureSamedi, true), gettype($horairesOuvertureSamedi)), __LINE__);
        }
        $this->horairesOuvertureSamedi = $horairesOuvertureSamedi;
        
        return $this;
    }
    /**
     * Get horairesOuvertureVendredi value
     * @return string|null
     */
    public function getHorairesOuvertureVendredi(): ?string
    {
        return $this->horairesOuvertureVendredi;
    }
    /**
     * Set horairesOuvertureVendredi value
     * @param string $horairesOuvertureVendredi
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setHorairesOuvertureVendredi(?string $horairesOuvertureVendredi = null): self
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureVendredi) && !is_string($horairesOuvertureVendredi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureVendredi, true), gettype($horairesOuvertureVendredi)), __LINE__);
        }
        $this->horairesOuvertureVendredi = $horairesOuvertureVendredi;
        
        return $this;
    }
    /**
     * Get horairesOuverturesFormates value
     * @return string|null
     */
    public function getHorairesOuverturesFormates(): ?string
    {
        return $this->horairesOuverturesFormates;
    }
    /**
     * Set horairesOuverturesFormates value
     * @param string $horairesOuverturesFormates
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setHorairesOuverturesFormates(?string $horairesOuverturesFormates = null): self
    {
        // validation for constraint: string
        if (!is_null($horairesOuverturesFormates) && !is_string($horairesOuverturesFormates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuverturesFormates, true), gettype($horairesOuverturesFormates)), __LINE__);
        }
        $this->horairesOuverturesFormates = $horairesOuverturesFormates;
        
        return $this;
    }
    /**
     * Get identifiantChronopost value
     * @return string|null
     */
    public function getIdentifiantChronopost(): ?string
    {
        return $this->identifiantChronopost;
    }
    /**
     * Set identifiantChronopost value
     * @param string $identifiantChronopost
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setIdentifiantChronopost(?string $identifiantChronopost = null): self
    {
        // validation for constraint: string
        if (!is_null($identifiantChronopost) && !is_string($identifiantChronopost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifiantChronopost, true), gettype($identifiantChronopost)), __LINE__);
        }
        $this->identifiantChronopost = $identifiantChronopost;
        
        return $this;
    }
    /**
     * Get localite value
     * @return string|null
     */
    public function getLocalite(): ?string
    {
        return $this->localite;
    }
    /**
     * Set localite value
     * @param string $localite
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setLocalite(?string $localite = null): self
    {
        // validation for constraint: string
        if (!is_null($localite) && !is_string($localite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localite, true), gettype($localite)), __LINE__);
        }
        $this->localite = $localite;
        
        return $this;
    }
    /**
     * Get nomEnseigne value
     * @return string|null
     */
    public function getNomEnseigne(): ?string
    {
        return $this->nomEnseigne;
    }
    /**
     * Set nomEnseigne value
     * @param string $nomEnseigne
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setNomEnseigne(?string $nomEnseigne = null): self
    {
        // validation for constraint: string
        if (!is_null($nomEnseigne) && !is_string($nomEnseigne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomEnseigne, true), gettype($nomEnseigne)), __LINE__);
        }
        $this->nomEnseigne = $nomEnseigne;
        
        return $this;
    }
    /**
     * Get typeDePoint value
     * @return string|null
     */
    public function getTypeDePoint(): ?string
    {
        return $this->typeDePoint;
    }
    /**
     * Set typeDePoint value
     * @param string $typeDePoint
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost
     */
    public function setTypeDePoint(?string $typeDePoint = null): self
    {
        // validation for constraint: string
        if (!is_null($typeDePoint) && !is_string($typeDePoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDePoint, true), gettype($typeDePoint)), __LINE__);
        }
        $this->typeDePoint = $typeDePoint;
        
        return $this;
    }
}
