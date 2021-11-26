<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultEnlevementNational Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultEnlevementNational extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int|null
     */
    protected ?int $codeErreur = null;
    /**
     * The infoEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoEnlevement|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoEnlevement $infoEnlevement = null;
    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libelleErreur = null;
    /**
     * Constructor method for resultEnlevementNational
     * @uses ChronoApiResultEnlevementNational::setCodeErreur()
     * @uses ChronoApiResultEnlevementNational::setInfoEnlevement()
     * @uses ChronoApiResultEnlevementNational::setLibelleErreur()
     * @param int $codeErreur
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoEnlevement $infoEnlevement
     * @param string $libelleErreur
     */
    public function __construct(?int $codeErreur = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoEnlevement $infoEnlevement = null, ?string $libelleErreur = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setInfoEnlevement($infoEnlevement)
            ->setLibelleErreur($libelleErreur);
    }
    /**
     * Get codeErreur value
     * @return int|null
     */
    public function getCodeErreur(): ?int
    {
        return $this->codeErreur;
    }
    /**
     * Set codeErreur value
     * @param int $codeErreur
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational
     */
    public function setCodeErreur(?int $codeErreur = null): self
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;
        
        return $this;
    }
    /**
     * Get infoEnlevement value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoEnlevement|null
     */
    public function getInfoEnlevement(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoEnlevement
    {
        return $this->infoEnlevement;
    }
    /**
     * Set infoEnlevement value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoEnlevement $infoEnlevement
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational
     */
    public function setInfoEnlevement(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiInfoEnlevement $infoEnlevement = null): self
    {
        $this->infoEnlevement = $infoEnlevement;
        
        return $this;
    }
    /**
     * Get libelleErreur value
     * @return string|null
     */
    public function getLibelleErreur(): ?string
    {
        return $this->libelleErreur;
    }
    /**
     * Set libelleErreur value
     * @param string $libelleErreur
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational
     */
    public function setLibelleErreur(?string $libelleErreur = null): self
    {
        // validation for constraint: string
        if (!is_null($libelleErreur) && !is_string($libelleErreur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelleErreur, true), gettype($libelleErreur)), __LINE__);
        }
        $this->libelleErreur = $libelleErreur;
        
        return $this;
    }
}
