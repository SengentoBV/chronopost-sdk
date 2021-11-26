<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODWithSenderRef Structs
 * Meta information extracted from the WSDL
 * - type: tns:searchPODWithSenderRef
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSearchPODWithSenderRef extends AbstractStructBase
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
     * The sendersRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sendersRef = null;
    /**
     * The pdf
     * @var bool|null
     */
    protected ?bool $pdf = null;
    /**
     * Constructor method for searchPODWithSenderRef
     * @uses ChronoApiSearchPODWithSenderRef::setAccountNumber()
     * @uses ChronoApiSearchPODWithSenderRef::setPassword()
     * @uses ChronoApiSearchPODWithSenderRef::setLanguage()
     * @uses ChronoApiSearchPODWithSenderRef::setSendersRef()
     * @uses ChronoApiSearchPODWithSenderRef::setPdf()
     * @param string $accountNumber
     * @param string $password
     * @param string $language
     * @param string $sendersRef
     * @param bool $pdf
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $language = null, ?string $sendersRef = null, ?bool $pdf = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLanguage($language)
            ->setSendersRef($sendersRef)
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRef
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRef
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRef
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRef
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRef
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
