<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheDetailPointChronopost Structs
 * Meta information extracted from the WSDL
 * - type: tns:rechercheDetailPointChronopost
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRechercheDetailPointChronopost extends AbstractStructBase
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
     * The identifiant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identifiant = null;
    /**
     * Constructor method for rechercheDetailPointChronopost
     * @uses ChronoApiRechercheDetailPointChronopost::setAccountNumber()
     * @uses ChronoApiRechercheDetailPointChronopost::setPassword()
     * @uses ChronoApiRechercheDetailPointChronopost::setIdentifiant()
     * @param string $accountNumber
     * @param string $password
     * @param string $identifiant
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $identifiant = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setIdentifiant($identifiant);
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopost
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopost
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
     * Get identifiant value
     * @return string|null
     */
    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }
    /**
     * Set identifiant value
     * @param string $identifiant
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopost
     */
    public function setIdentifiant(?string $identifiant = null): self
    {
        // validation for constraint: string
        if (!is_null($identifiant) && !is_string($identifiant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifiant, true), gettype($identifiant)), __LINE__);
        }
        $this->identifiant = $identifiant;
        
        return $this;
    }
}
