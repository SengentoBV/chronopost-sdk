<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNational Structs
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNational
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiCreerEnlevementNational extends AbstractStructBase
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
     * The datePassageFermeture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $datePassageFermeture = null;
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
     * The particulartiesEsd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd $particulartiesEsd = null;
    /**
     * The referenceEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $referenceEsdClient = null;
    /**
     * The contenu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $contenu = null;
    /**
     * The options
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiOptions|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiOptions $options = null;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * Constructor method for creerEnlevementNational
     * @uses ChronoApiCreerEnlevementNational::setHeaderValue()
     * @uses ChronoApiCreerEnlevementNational::setPassword()
     * @uses ChronoApiCreerEnlevementNational::setDatePassage()
     * @uses ChronoApiCreerEnlevementNational::setDatePassageFermeture()
     * @uses ChronoApiCreerEnlevementNational::setDonneurDOrdre()
     * @uses ChronoApiCreerEnlevementNational::setAdresseEnlevement()
     * @uses ChronoApiCreerEnlevementNational::setParticulartiesEsd()
     * @uses ChronoApiCreerEnlevementNational::setReferenceEsdClient()
     * @uses ChronoApiCreerEnlevementNational::setContenu()
     * @uses ChronoApiCreerEnlevementNational::setOptions()
     * @uses ChronoApiCreerEnlevementNational::setLocale()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue
     * @param string $password
     * @param string $datePassage
     * @param string $datePassageFermeture
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre $donneurDOrdre
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3 $adresseEnlevement
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd $particulartiesEsd
     * @param string $referenceEsdClient
     * @param string $contenu
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiOptions $options
     * @param string $locale
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null, ?string $password = null, ?string $datePassage = null, ?string $datePassageFermeture = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDonneurDOrdre $donneurDOrdre = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3 $adresseEnlevement = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd $particulartiesEsd = null, ?string $referenceEsdClient = null, ?string $contenu = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiOptions $options = null, ?string $locale = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setPassword($password)
            ->setDatePassage($datePassage)
            ->setDatePassageFermeture($datePassageFermeture)
            ->setDonneurDOrdre($donneurDOrdre)
            ->setAdresseEnlevement($adresseEnlevement)
            ->setParticulartiesEsd($particulartiesEsd)
            ->setReferenceEsdClient($referenceEsdClient)
            ->setContenu($contenu)
            ->setOptions($options)
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
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
     * Get datePassageFermeture value
     * @return string|null
     */
    public function getDatePassageFermeture(): ?string
    {
        return $this->datePassageFermeture;
    }
    /**
     * Set datePassageFermeture value
     * @param string $datePassageFermeture
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
     */
    public function setDatePassageFermeture(?string $datePassageFermeture = null): self
    {
        // validation for constraint: string
        if (!is_null($datePassageFermeture) && !is_string($datePassageFermeture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassageFermeture, true), gettype($datePassageFermeture)), __LINE__);
        }
        $this->datePassageFermeture = $datePassageFermeture;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
     */
    public function setAdresseEnlevement(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3 $adresseEnlevement = null): self
    {
        $this->adresseEnlevement = $adresseEnlevement;
        
        return $this;
    }
    /**
     * Get particulartiesEsd value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd|null
     */
    public function getParticulartiesEsd(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd
    {
        return $this->particulartiesEsd;
    }
    /**
     * Set particulartiesEsd value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd $particulartiesEsd
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
     */
    public function setParticulartiesEsd(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesEsd $particulartiesEsd = null): self
    {
        $this->particulartiesEsd = $particulartiesEsd;
        
        return $this;
    }
    /**
     * Get referenceEsdClient value
     * @return string|null
     */
    public function getReferenceEsdClient(): ?string
    {
        return $this->referenceEsdClient;
    }
    /**
     * Set referenceEsdClient value
     * @param string $referenceEsdClient
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
     */
    public function setReferenceEsdClient(?string $referenceEsdClient = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceEsdClient) && !is_string($referenceEsdClient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceEsdClient, true), gettype($referenceEsdClient)), __LINE__);
        }
        $this->referenceEsdClient = $referenceEsdClient;
        
        return $this;
    }
    /**
     * Get contenu value
     * @return string|null
     */
    public function getContenu(): ?string
    {
        return $this->contenu;
    }
    /**
     * Set contenu value
     * @param string $contenu
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
     */
    public function setContenu(?string $contenu = null): self
    {
        // validation for constraint: string
        if (!is_null($contenu) && !is_string($contenu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contenu, true), gettype($contenu)), __LINE__);
        }
        $this->contenu = $contenu;
        
        return $this;
    }
    /**
     * Get options value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiOptions|null
     */
    public function getOptions(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiOptions
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiOptions $options
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
     */
    public function setOptions(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiOptions $options = null): self
    {
        $this->options = $options;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational
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
