<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoClient Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiInfoClient extends AbstractStructBase
{
    /**
     * The contenu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $contenu = null;
    /**
     * The devise
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $devise = null;
    /**
     * The montant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $montant = null;
    /**
     * The refEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $refEsdClient = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service = null;
    /**
     * Constructor method for infoClient
     * @uses ChronoApiInfoClient::setContenu()
     * @uses ChronoApiInfoClient::setDevise()
     * @uses ChronoApiInfoClient::setMontant()
     * @uses ChronoApiInfoClient::setRefEsdClient()
     * @uses ChronoApiInfoClient::setService()
     * @param string $contenu
     * @param string $devise
     * @param float $montant
     * @param string $refEsdClient
     * @param string $service
     */
    public function __construct(?string $contenu = null, ?string $devise = null, ?float $montant = null, ?string $refEsdClient = null, ?string $service = null)
    {
        $this
            ->setContenu($contenu)
            ->setDevise($devise)
            ->setMontant($montant)
            ->setRefEsdClient($refEsdClient)
            ->setService($service);
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient
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
     * Get devise value
     * @return string|null
     */
    public function getDevise(): ?string
    {
        return $this->devise;
    }
    /**
     * Set devise value
     * @param string $devise
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient
     */
    public function setDevise(?string $devise = null): self
    {
        // validation for constraint: string
        if (!is_null($devise) && !is_string($devise)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($devise, true), gettype($devise)), __LINE__);
        }
        $this->devise = $devise;
        
        return $this;
    }
    /**
     * Get montant value
     * @return float|null
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }
    /**
     * Set montant value
     * @param float $montant
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient
     */
    public function setMontant(?float $montant = null): self
    {
        // validation for constraint: float
        if (!is_null($montant) && !(is_float($montant) || is_numeric($montant))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($montant, true), gettype($montant)), __LINE__);
        }
        $this->montant = $montant;
        
        return $this;
    }
    /**
     * Get refEsdClient value
     * @return string|null
     */
    public function getRefEsdClient(): ?string
    {
        return $this->refEsdClient;
    }
    /**
     * Set refEsdClient value
     * @param string $refEsdClient
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient
     */
    public function setRefEsdClient(?string $refEsdClient = null): self
    {
        // validation for constraint: string
        if (!is_null($refEsdClient) && !is_string($refEsdClient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refEsdClient, true), gettype($refEsdClient)), __LINE__);
        }
        $this->refEsdClient = $refEsdClient;
        
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoClient
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
        
        return $this;
    }
}
