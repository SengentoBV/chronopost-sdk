<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearch Structs
 * Meta information extracted from the WSDL
 * - type: tns:trackSearch
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiTrackSearch extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The consigneesCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $consigneesCountry = null;
    /**
     * The consigneesRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $consigneesRef = null;
    /**
     * The consigneesZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $consigneesZipCode = null;
    /**
     * The dateDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateDeposit = null;
    /**
     * The dateEndDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateEndDeposit = null;
    /**
     * The parcelState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $parcelState = null;
    /**
     * The sendersRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sendersRef = null;
    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * Constructor method for trackSearch
     * @uses ChronoApiTrackSearch::setAccountNumber()
     * @uses ChronoApiTrackSearch::setPassword()
     * @uses ChronoApiTrackSearch::setLanguage()
     * @uses ChronoApiTrackSearch::setConsigneesCountry()
     * @uses ChronoApiTrackSearch::setConsigneesRef()
     * @uses ChronoApiTrackSearch::setConsigneesZipCode()
     * @uses ChronoApiTrackSearch::setDateDeposit()
     * @uses ChronoApiTrackSearch::setDateEndDeposit()
     * @uses ChronoApiTrackSearch::setParcelState()
     * @uses ChronoApiTrackSearch::setSendersRef()
     * @uses ChronoApiTrackSearch::setServiceCode()
     * @param string $accountNumber
     * @param string $password
     * @param string $language
     * @param string $consigneesCountry
     * @param string $consigneesRef
     * @param string $consigneesZipCode
     * @param string $dateDeposit
     * @param string $dateEndDeposit
     * @param string $parcelState
     * @param string $sendersRef
     * @param string $serviceCode
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $language = null, ?string $consigneesCountry = null, ?string $consigneesRef = null, ?string $consigneesZipCode = null, ?string $dateDeposit = null, ?string $dateEndDeposit = null, ?string $parcelState = null, ?string $sendersRef = null, ?string $serviceCode = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLanguage($language)
            ->setConsigneesCountry($consigneesCountry)
            ->setConsigneesRef($consigneesRef)
            ->setConsigneesZipCode($consigneesZipCode)
            ->setDateDeposit($dateDeposit)
            ->setDateEndDeposit($dateEndDeposit)
            ->setParcelState($parcelState)
            ->setSendersRef($sendersRef)
            ->setServiceCode($serviceCode);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get consigneesCountry value
     * @return string|null
     */
    public function getConsigneesCountry(): ?string
    {
        return $this->consigneesCountry;
    }
    /**
     * Set consigneesCountry value
     * @param string $consigneesCountry
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setConsigneesCountry(?string $consigneesCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($consigneesCountry) && !is_string($consigneesCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneesCountry, true), gettype($consigneesCountry)), __LINE__);
        }
        $this->consigneesCountry = $consigneesCountry;
        
        return $this;
    }
    /**
     * Get consigneesRef value
     * @return string|null
     */
    public function getConsigneesRef(): ?string
    {
        return $this->consigneesRef;
    }
    /**
     * Set consigneesRef value
     * @param string $consigneesRef
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setConsigneesRef(?string $consigneesRef = null): self
    {
        // validation for constraint: string
        if (!is_null($consigneesRef) && !is_string($consigneesRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneesRef, true), gettype($consigneesRef)), __LINE__);
        }
        $this->consigneesRef = $consigneesRef;
        
        return $this;
    }
    /**
     * Get consigneesZipCode value
     * @return string|null
     */
    public function getConsigneesZipCode(): ?string
    {
        return $this->consigneesZipCode;
    }
    /**
     * Set consigneesZipCode value
     * @param string $consigneesZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setConsigneesZipCode(?string $consigneesZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($consigneesZipCode) && !is_string($consigneesZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneesZipCode, true), gettype($consigneesZipCode)), __LINE__);
        }
        $this->consigneesZipCode = $consigneesZipCode;
        
        return $this;
    }
    /**
     * Get dateDeposit value
     * @return string|null
     */
    public function getDateDeposit(): ?string
    {
        return $this->dateDeposit;
    }
    /**
     * Set dateDeposit value
     * @param string $dateDeposit
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setDateDeposit(?string $dateDeposit = null): self
    {
        // validation for constraint: string
        if (!is_null($dateDeposit) && !is_string($dateDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateDeposit, true), gettype($dateDeposit)), __LINE__);
        }
        $this->dateDeposit = $dateDeposit;
        
        return $this;
    }
    /**
     * Get dateEndDeposit value
     * @return string|null
     */
    public function getDateEndDeposit(): ?string
    {
        return $this->dateEndDeposit;
    }
    /**
     * Set dateEndDeposit value
     * @param string $dateEndDeposit
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setDateEndDeposit(?string $dateEndDeposit = null): self
    {
        // validation for constraint: string
        if (!is_null($dateEndDeposit) && !is_string($dateEndDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEndDeposit, true), gettype($dateEndDeposit)), __LINE__);
        }
        $this->dateEndDeposit = $dateEndDeposit;
        
        return $this;
    }
    /**
     * Get parcelState value
     * @return string|null
     */
    public function getParcelState(): ?string
    {
        return $this->parcelState;
    }
    /**
     * Set parcelState value
     * @param string $parcelState
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setParcelState(?string $parcelState = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelState) && !is_string($parcelState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelState, true), gettype($parcelState)), __LINE__);
        }
        $this->parcelState = $parcelState;
        
        return $this;
    }
    /**
     * Get sendersRef value
     * @return string|null
     */
    public function getSendersRef(): ?string
    {
        return $this->sendersRef;
    }
    /**
     * Set sendersRef value
     * @param string $sendersRef
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setSendersRef(?string $sendersRef = null): self
    {
        // validation for constraint: string
        if (!is_null($sendersRef) && !is_string($sendersRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendersRef, true), gettype($sendersRef)), __LINE__);
        }
        $this->sendersRef = $sendersRef;
        
        return $this;
    }
    /**
     * Get serviceCode value
     * @return string|null
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }
    /**
     * Set serviceCode value
     * @param string $serviceCode
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;
        
        return $this;
    }
}
