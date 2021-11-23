<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recipientLocalValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRecipientLocalValue extends ChronoApiRecipientValue
{
    /**
     * The identityCardNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identityCardNumber = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The province
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $province = null;
    /**
     * Constructor method for recipientLocalValue
     * @uses ChronoApiRecipientLocalValue::setIdentityCardNumber()
     * @uses ChronoApiRecipientLocalValue::setLanguage()
     * @uses ChronoApiRecipientLocalValue::setProvince()
     * @param string $identityCardNumber
     * @param string $language
     * @param string $province
     */
    public function __construct(?string $identityCardNumber = null, ?string $language = null, ?string $province = null)
    {
        $this
            ->setIdentityCardNumber($identityCardNumber)
            ->setLanguage($language)
            ->setProvince($province);
    }
    /**
     * Get identityCardNumber value
     * @return string|null
     */
    public function getIdentityCardNumber(): ?string
    {
        return $this->identityCardNumber;
    }
    /**
     * Set identityCardNumber value
     * @param string $identityCardNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientLocalValue
     */
    public function setIdentityCardNumber(?string $identityCardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($identityCardNumber) && !is_string($identityCardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityCardNumber, true), gettype($identityCardNumber)), __LINE__);
        }
        $this->identityCardNumber = $identityCardNumber;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientLocalValue
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
     * Get province value
     * @return string|null
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientLocalValue
     */
    public function setProvince(?string $province = null): self
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($province, true), gettype($province)), __LINE__);
        }
        $this->province = $province;
        
        return $this;
    }
}
