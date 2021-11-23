<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for headerValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiHeaderValue extends AbstractStructBase
{
    /**
     * The accountNumber
     * @var int|null
     */
    protected ?int $accountNumber = null;
    /**
     * The idEmit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idEmit = null;
    /**
     * The identWebPro
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identWebPro = null;
    /**
     * The subAccount
     * @var int|null
     */
    protected ?int $subAccount = null;
    /**
     * Constructor method for headerValue
     * @uses ChronoApiHeaderValue::setAccountNumber()
     * @uses ChronoApiHeaderValue::setIdEmit()
     * @uses ChronoApiHeaderValue::setIdentWebPro()
     * @uses ChronoApiHeaderValue::setSubAccount()
     * @param int $accountNumber
     * @param string $idEmit
     * @param string $identWebPro
     * @param int $subAccount
     */
    public function __construct(?int $accountNumber = null, ?string $idEmit = null, ?string $identWebPro = null, ?int $subAccount = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setIdEmit($idEmit)
            ->setIdentWebPro($identWebPro)
            ->setSubAccount($subAccount);
    }
    /**
     * Get accountNumber value
     * @return int|null
     */
    public function getAccountNumber(): ?int
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param int $accountNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue
     */
    public function setAccountNumber(?int $accountNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($accountNumber) && !(is_int($accountNumber) || ctype_digit($accountNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get idEmit value
     * @return string|null
     */
    public function getIdEmit(): ?string
    {
        return $this->idEmit;
    }
    /**
     * Set idEmit value
     * @param string $idEmit
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue
     */
    public function setIdEmit(?string $idEmit = null): self
    {
        // validation for constraint: string
        if (!is_null($idEmit) && !is_string($idEmit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idEmit, true), gettype($idEmit)), __LINE__);
        }
        $this->idEmit = $idEmit;
        
        return $this;
    }
    /**
     * Get identWebPro value
     * @return string|null
     */
    public function getIdentWebPro(): ?string
    {
        return $this->identWebPro;
    }
    /**
     * Set identWebPro value
     * @param string $identWebPro
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue
     */
    public function setIdentWebPro(?string $identWebPro = null): self
    {
        // validation for constraint: string
        if (!is_null($identWebPro) && !is_string($identWebPro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identWebPro, true), gettype($identWebPro)), __LINE__);
        }
        $this->identWebPro = $identWebPro;
        
        return $this;
    }
    /**
     * Get subAccount value
     * @return int|null
     */
    public function getSubAccount(): ?int
    {
        return $this->subAccount;
    }
    /**
     * Set subAccount value
     * @param int $subAccount
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue
     */
    public function setSubAccount(?int $subAccount = null): self
    {
        // validation for constraint: int
        if (!is_null($subAccount) && !(is_int($subAccount) || ctype_digit($subAccount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subAccount, true), gettype($subAccount)), __LINE__);
        }
        $this->subAccount = $subAccount;
        
        return $this;
    }
}
