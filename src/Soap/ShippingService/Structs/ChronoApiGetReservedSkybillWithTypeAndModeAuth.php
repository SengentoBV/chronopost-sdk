<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeAuth Structs
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeAuth
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiGetReservedSkybillWithTypeAndModeAuth extends AbstractStructBase
{
    /**
     * The numberSearch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numberSearch = null;
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mode = null;
    /**
     * The accountNumber
     * @var int|null
     */
    protected ?int $accountNumber = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeAuth
     * @uses ChronoApiGetReservedSkybillWithTypeAndModeAuth::setNumberSearch()
     * @uses ChronoApiGetReservedSkybillWithTypeAndModeAuth::setMode()
     * @uses ChronoApiGetReservedSkybillWithTypeAndModeAuth::setAccountNumber()
     * @uses ChronoApiGetReservedSkybillWithTypeAndModeAuth::setPassword()
     * @param string $numberSearch
     * @param string $mode
     * @param int $accountNumber
     * @param string $password
     */
    public function __construct(?string $numberSearch = null, ?string $mode = null, ?int $accountNumber = null, ?string $password = null)
    {
        $this
            ->setNumberSearch($numberSearch)
            ->setMode($mode)
            ->setAccountNumber($accountNumber)
            ->setPassword($password);
    }
    /**
     * Get numberSearch value
     * @return string|null
     */
    public function getNumberSearch(): ?string
    {
        return $this->numberSearch;
    }
    /**
     * Set numberSearch value
     * @param string $numberSearch
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeAuth
     */
    public function setNumberSearch(?string $numberSearch = null): self
    {
        // validation for constraint: string
        if (!is_null($numberSearch) && !is_string($numberSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberSearch, true), gettype($numberSearch)), __LINE__);
        }
        $this->numberSearch = $numberSearch;
        
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param string $mode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeAuth
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        
        return $this;
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeAuth
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeAuth
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
}
