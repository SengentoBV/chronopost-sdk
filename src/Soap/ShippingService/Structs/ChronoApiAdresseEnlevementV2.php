<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresseEnlevementV2 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiAdresseEnlevementV2 extends ChronoApiAdresseEnlevement
{
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * Constructor method for adresseEnlevementV2
     * @uses ChronoApiAdresseEnlevementV2::setEmail()
     * @param string $email
     */
    public function __construct(?string $email = null)
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAdresseEnlevementV2
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
}
