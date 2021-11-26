<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultAnnulerEnlevement Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultAnnulerEnlevement extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int|null
     */
    protected ?int $codeErreur = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The statut
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiStatut|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiStatut $statut = null;
    /**
     * Constructor method for resultAnnulerEnlevement
     * @uses ChronoApiResultAnnulerEnlevement::setCodeErreur()
     * @uses ChronoApiResultAnnulerEnlevement::setErrorMessage()
     * @uses ChronoApiResultAnnulerEnlevement::setStatut()
     * @param int $codeErreur
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiStatut $statut
     */
    public function __construct(?int $codeErreur = null, ?string $errorMessage = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiStatut $statut = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setErrorMessage($errorMessage)
            ->setStatut($statut);
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement
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
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get statut value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiStatut|null
     */
    public function getStatut(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiStatut
    {
        return $this->statut;
    }
    /**
     * Set statut value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiStatut $statut
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement
     */
    public function setStatut(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiStatut $statut = null): self
    {
        $this->statut = $statut;
        
        return $this;
    }
}
