<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for destinataireDpd Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiDestinataireDpd extends AbstractStructBase
{
    /**
     * The adresseDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire $adresseDestinataire = null;
    /**
     * The infoClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient $infoClient = null;
    /**
     * The particularites
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites $particularites = null;
    /**
     * The particularitesColisDpd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd $particularitesColisDpd = null;
    /**
     * Constructor method for destinataireDpd
     * @uses ChronoApiDestinataireDpd::setAdresseDestinataire()
     * @uses ChronoApiDestinataireDpd::setInfoClient()
     * @uses ChronoApiDestinataireDpd::setParticularites()
     * @uses ChronoApiDestinataireDpd::setParticularitesColisDpd()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire $adresseDestinataire
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient $infoClient
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites $particularites
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd $particularitesColisDpd
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire $adresseDestinataire = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient $infoClient = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites $particularites = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd $particularitesColisDpd = null)
    {
        $this
            ->setAdresseDestinataire($adresseDestinataire)
            ->setInfoClient($infoClient)
            ->setParticularites($particularites)
            ->setParticularitesColisDpd($particularitesColisDpd);
    }
    /**
     * Get adresseDestinataire value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire|null
     */
    public function getAdresseDestinataire(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire
    {
        return $this->adresseDestinataire;
    }
    /**
     * Set adresseDestinataire value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire $adresseDestinataire
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd
     */
    public function setAdresseDestinataire(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseDestinataire $adresseDestinataire = null): self
    {
        $this->adresseDestinataire = $adresseDestinataire;
        
        return $this;
    }
    /**
     * Get infoClient value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient|null
     */
    public function getInfoClient(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient
    {
        return $this->infoClient;
    }
    /**
     * Set infoClient value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient $infoClient
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd
     */
    public function setInfoClient(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient $infoClient = null): self
    {
        $this->infoClient = $infoClient;
        
        return $this;
    }
    /**
     * Get particularites value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites|null
     */
    public function getParticularites(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites
    {
        return $this->particularites;
    }
    /**
     * Set particularites value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites $particularites
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd
     */
    public function setParticularites(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularites $particularites = null): self
    {
        $this->particularites = $particularites;
        
        return $this;
    }
    /**
     * Get particularitesColisDpd value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd|null
     */
    public function getParticularitesColisDpd(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd
    {
        return $this->particularitesColisDpd;
    }
    /**
     * Set particularitesColisDpd value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd $particularitesColisDpd
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd
     */
    public function setParticularitesColisDpd(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd $particularitesColisDpd = null): self
    {
        $this->particularitesColisDpd = $particularitesColisDpd;
        
        return $this;
    }
}
