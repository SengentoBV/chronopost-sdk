<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPOD Structs
 * Meta information extracted from the WSDL
 * - type: tns:searchPOD
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSearchPOD extends AbstractStructBase
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
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillNumber = null;
    /**
     * The pdf
     * @var bool|null
     */
    protected ?bool $pdf = null;
    /**
     * Constructor method for searchPOD
     * @uses ChronoApiSearchPOD::setAccountNumber()
     * @uses ChronoApiSearchPOD::setPassword()
     * @uses ChronoApiSearchPOD::setLanguage()
     * @uses ChronoApiSearchPOD::setSkybillNumber()
     * @uses ChronoApiSearchPOD::setPdf()
     * @param string $accountNumber
     * @param string $password
     * @param string $language
     * @param string $skybillNumber
     * @param bool $pdf
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $language = null, ?string $skybillNumber = null, ?bool $pdf = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLanguage($language)
            ->setSkybillNumber($skybillNumber)
            ->setPdf($pdf);
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPOD
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPOD
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPOD
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
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPOD
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        
        return $this;
    }
    /**
     * Get pdf value
     * @return bool|null
     */
    public function getPdf(): ?bool
    {
        return $this->pdf;
    }
    /**
     * Set pdf value
     * @param bool $pdf
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPOD
     */
    public function setPdf(?bool $pdf = null): self
    {
        // validation for constraint: boolean
        if (!is_null($pdf) && !is_bool($pdf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pdf, true), gettype($pdf)), __LINE__);
        }
        $this->pdf = $pdf;
        
        return $this;
    }
}
