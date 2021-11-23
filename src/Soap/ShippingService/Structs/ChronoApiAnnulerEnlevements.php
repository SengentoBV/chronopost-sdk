<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevements Structs
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevements
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiAnnulerEnlevements extends AbstractStructBase
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
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * The esdNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $esdNumber = null;
    /**
     * Constructor method for annulerEnlevements
     * @uses ChronoApiAnnulerEnlevements::setAccountNumber()
     * @uses ChronoApiAnnulerEnlevements::setPassword()
     * @uses ChronoApiAnnulerEnlevements::setLocale()
     * @uses ChronoApiAnnulerEnlevements::setEsdNumber()
     * @param string $accountNumber
     * @param string $password
     * @param string $locale
     * @param string[] $esdNumber
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $locale = null, ?array $esdNumber = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLocale($locale)
            ->setEsdNumber($esdNumber);
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevements
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevements
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
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevements
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
    /**
     * Get esdNumber value
     * @return string[]
     */
    public function getEsdNumber(): ?array
    {
        return $this->esdNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setEsdNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEsdNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEsdNumberForArrayConstraintsFromSetEsdNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $annulerEnlevementsEsdNumberItem) {
            // validation for constraint: itemType
            if (!is_string($annulerEnlevementsEsdNumberItem)) {
                $invalidValues[] = is_object($annulerEnlevementsEsdNumberItem) ? get_class($annulerEnlevementsEsdNumberItem) : sprintf('%s(%s)', gettype($annulerEnlevementsEsdNumberItem), var_export($annulerEnlevementsEsdNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The esdNumber property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set esdNumber value
     * @throws InvalidArgumentException
     * @param string[] $esdNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevements
     */
    public function setEsdNumber(?array $esdNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($esdNumberArrayErrorMessage = self::validateEsdNumberForArrayConstraintsFromSetEsdNumber($esdNumber))) {
            throw new InvalidArgumentException($esdNumberArrayErrorMessage, __LINE__);
        }
        $this->esdNumber = $esdNumber;
        
        return $this;
    }
    /**
     * Add item to esdNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevements
     */
    public function addToEsdNumber(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The esdNumber property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->esdNumber[] = $item;
        
        return $this;
    }
}
