<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEurope Structs
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEurope
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiCreerEnlevementEurope extends AbstractStructBase
{
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The datePassage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $datePassage = null;
    /**
     * The donneurDOrdre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre $donneurDOrdre = null;
    /**
     * The adresseEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3 $adresseEnlevement = null;
    /**
     * The destinatairesEsd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd $destinatairesEsd = null;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * Constructor method for creerEnlevementEurope
     * @uses ChronoApiCreerEnlevementEurope::setHeaderValue()
     * @uses ChronoApiCreerEnlevementEurope::setPassword()
     * @uses ChronoApiCreerEnlevementEurope::setDatePassage()
     * @uses ChronoApiCreerEnlevementEurope::setDonneurDOrdre()
     * @uses ChronoApiCreerEnlevementEurope::setAdresseEnlevement()
     * @uses ChronoApiCreerEnlevementEurope::setDestinatairesEsd()
     * @uses ChronoApiCreerEnlevementEurope::setLocale()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue
     * @param string $password
     * @param string $datePassage
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre $donneurDOrdre
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3 $adresseEnlevement
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd $destinatairesEsd
     * @param string $locale
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null, ?string $password = null, ?string $datePassage = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre $donneurDOrdre = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3 $adresseEnlevement = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd $destinatairesEsd = null, ?string $locale = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setPassword($password)
            ->setDatePassage($datePassage)
            ->setDonneurDOrdre($donneurDOrdre)
            ->setAdresseEnlevement($adresseEnlevement)
            ->setDestinatairesEsd($destinatairesEsd)
            ->setLocale($locale);
    }
    /**
     * Get headerValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue|null
     */
    public function getHeaderValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope
     */
    public function setHeaderValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope
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
     * Get datePassage value
     * @return string|null
     */
    public function getDatePassage(): ?string
    {
        return $this->datePassage;
    }
    /**
     * Set datePassage value
     * @param string $datePassage
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope
     */
    public function setDatePassage(?string $datePassage = null): self
    {
        // validation for constraint: string
        if (!is_null($datePassage) && !is_string($datePassage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassage, true), gettype($datePassage)), __LINE__);
        }
        $this->datePassage = $datePassage;
        
        return $this;
    }
    /**
     * Get donneurDOrdre value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre|null
     */
    public function getDonneurDOrdre(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre
    {
        return $this->donneurDOrdre;
    }
    /**
     * Set donneurDOrdre value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre $donneurDOrdre
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope
     */
    public function setDonneurDOrdre(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre $donneurDOrdre = null): self
    {
        $this->donneurDOrdre = $donneurDOrdre;
        
        return $this;
    }
    /**
     * Get adresseEnlevement value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3|null
     */
    public function getAdresseEnlevement(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3
    {
        return $this->adresseEnlevement;
    }
    /**
     * Set adresseEnlevement value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3 $adresseEnlevement
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope
     */
    public function setAdresseEnlevement(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3 $adresseEnlevement = null): self
    {
        $this->adresseEnlevement = $adresseEnlevement;
        
        return $this;
    }
    /**
     * Get destinatairesEsd value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd|null
     */
    public function getDestinatairesEsd(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd
    {
        return $this->destinatairesEsd;
    }
    /**
     * Set destinatairesEsd value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd $destinatairesEsd
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope
     */
    public function setDestinatairesEsd(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd $destinatairesEsd = null): self
    {
        $this->destinatairesEsd = $destinatairesEsd;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope
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
}
