<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRouting Structs
 * Meta information extracted from the WSDL
 * - type: tns:getRouting
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiGetRouting extends AbstractStructBase
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
     * The shipperDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperDepot = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The socode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $socode = null;
    /**
     * The ascode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ascode = null;
    /**
     * Constructor method for getRouting
     * @uses ChronoApiGetRouting::setAccountNumber()
     * @uses ChronoApiGetRouting::setPassword()
     * @uses ChronoApiGetRouting::setShipperDepot()
     * @uses ChronoApiGetRouting::setCountryCode()
     * @uses ChronoApiGetRouting::setZipCode()
     * @uses ChronoApiGetRouting::setSocode()
     * @uses ChronoApiGetRouting::setAscode()
     * @param string $accountNumber
     * @param string $password
     * @param string $shipperDepot
     * @param string $countryCode
     * @param string $zipCode
     * @param string $socode
     * @param string $ascode
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $shipperDepot = null, ?string $countryCode = null, ?string $zipCode = null, ?string $socode = null, ?string $ascode = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setShipperDepot($shipperDepot)
            ->setCountryCode($countryCode)
            ->setZipCode($zipCode)
            ->setSocode($socode)
            ->setAscode($ascode);
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting
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
     * Get shipperDepot value
     * @return string|null
     */
    public function getShipperDepot(): ?string
    {
        return $this->shipperDepot;
    }
    /**
     * Set shipperDepot value
     * @param string $shipperDepot
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting
     */
    public function setShipperDepot(?string $shipperDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperDepot) && !is_string($shipperDepot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperDepot, true), gettype($shipperDepot)), __LINE__);
        }
        $this->shipperDepot = $shipperDepot;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get socode value
     * @return string|null
     */
    public function getSocode(): ?string
    {
        return $this->socode;
    }
    /**
     * Set socode value
     * @param string $socode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting
     */
    public function setSocode(?string $socode = null): self
    {
        // validation for constraint: string
        if (!is_null($socode) && !is_string($socode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($socode, true), gettype($socode)), __LINE__);
        }
        $this->socode = $socode;
        
        return $this;
    }
    /**
     * Get ascode value
     * @return string|null
     */
    public function getAscode(): ?string
    {
        return $this->ascode;
    }
    /**
     * Set ascode value
     * @param string $ascode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting
     */
    public function setAscode(?string $ascode = null): self
    {
        // validation for constraint: string
        if (!is_null($ascode) && !is_string($ascode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ascode, true), gettype($ascode)), __LINE__);
        }
        $this->ascode = $ascode;
        
        return $this;
    }
}
