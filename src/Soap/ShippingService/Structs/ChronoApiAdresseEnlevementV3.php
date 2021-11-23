<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresseEnlevementV3 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiAdresseEnlevementV3 extends ChronoApiAdresseEnlevementV2
{
    /**
     * The refExpediteur
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $refExpediteur = null;
    /**
     * Constructor method for adresseEnlevementV3
     * @uses ChronoApiAdresseEnlevementV3::setRefExpediteur()
     * @param string $refExpediteur
     */
    public function __construct(?string $refExpediteur = null)
    {
        $this
            ->setRefExpediteur($refExpediteur);
    }
    /**
     * Get refExpediteur value
     * @return string|null
     */
    public function getRefExpediteur(): ?string
    {
        return $this->refExpediteur;
    }
    /**
     * Set refExpediteur value
     * @param string $refExpediteur
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV3
     */
    public function setRefExpediteur(?string $refExpediteur = null): self
    {
        // validation for constraint: string
        if (!is_null($refExpediteur) && !is_string($refExpediteur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refExpediteur, true), gettype($refExpediteur)), __LINE__);
        }
        $this->refExpediteur = $refExpediteur;
        
        return $this;
    }
}
