<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesColisDpd Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiParticularitesColisDpd extends AbstractStructBase
{
    /**
     * The infoDouanieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoDouanieres|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoDouanieres $infoDouanieres = null;
    /**
     * The valeurAssuree
     * @var float|null
     */
    protected ?float $valeurAssuree = null;
    /**
     * Constructor method for particularitesColisDpd
     * @uses ChronoApiParticularitesColisDpd::setInfoDouanieres()
     * @uses ChronoApiParticularitesColisDpd::setValeurAssuree()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoDouanieres $infoDouanieres
     * @param float $valeurAssuree
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoDouanieres $infoDouanieres = null, ?float $valeurAssuree = null)
    {
        $this
            ->setInfoDouanieres($infoDouanieres)
            ->setValeurAssuree($valeurAssuree);
    }
    /**
     * Get infoDouanieres value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoDouanieres|null
     */
    public function getInfoDouanieres(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoDouanieres
    {
        return $this->infoDouanieres;
    }
    /**
     * Set infoDouanieres value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoDouanieres $infoDouanieres
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd
     */
    public function setInfoDouanieres(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoDouanieres $infoDouanieres = null): self
    {
        $this->infoDouanieres = $infoDouanieres;
        
        return $this;
    }
    /**
     * Get valeurAssuree value
     * @return float|null
     */
    public function getValeurAssuree(): ?float
    {
        return $this->valeurAssuree;
    }
    /**
     * Set valeurAssuree value
     * @param float $valeurAssuree
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiParticularitesColisDpd
     */
    public function setValeurAssuree(?float $valeurAssuree = null): self
    {
        // validation for constraint: float
        if (!is_null($valeurAssuree) && !(is_float($valeurAssuree) || is_numeric($valeurAssuree))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valeurAssuree, true), gettype($valeurAssuree)), __LINE__);
        }
        $this->valeurAssuree = $valeurAssuree;
        
        return $this;
    }
}
