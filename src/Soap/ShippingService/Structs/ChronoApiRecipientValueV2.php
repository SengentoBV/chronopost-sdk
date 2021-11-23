<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recipientValueV2 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRecipientValueV2 extends ChronoApiRecipientValue
{
    /**
     * The recipientType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientType = null;
    /**
     * Constructor method for recipientValueV2
     * @uses ChronoApiRecipientValueV2::setRecipientType()
     * @param string $recipientType
     */
    public function __construct(?string $recipientType = null)
    {
        $this
            ->setRecipientType($recipientType);
    }
    /**
     * Get recipientType value
     * @return string|null
     */
    public function getRecipientType(): ?string
    {
        return $this->recipientType;
    }
    /**
     * Set recipientType value
     * @param string $recipientType
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValueV2
     */
    public function setRecipientType(?string $recipientType = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientType) && !is_string($recipientType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientType, true), gettype($recipientType)), __LINE__);
        }
        $this->recipientType = $recipientType;
        
        return $this;
    }
}
