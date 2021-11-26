<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValueV3 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSkybillWithDimensionsValueV3 extends ChronoApiSkybillWithDimensionsValueV2
{
    /**
     * The subAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subAccount = null;
    /**
     * The toTheOrderOf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $toTheOrderOf = null;
    /**
     * Constructor method for skybillWithDimensionsValueV3
     * @uses ChronoApiSkybillWithDimensionsValueV3::setSubAccount()
     * @uses ChronoApiSkybillWithDimensionsValueV3::setToTheOrderOf()
     * @param string $subAccount
     * @param string $toTheOrderOf
     */
    public function __construct(?string $subAccount = null, ?string $toTheOrderOf = null)
    {
        $this
            ->setSubAccount($subAccount)
            ->setToTheOrderOf($toTheOrderOf);
    }
    /**
     * Get subAccount value
     * @return string|null
     */
    public function getSubAccount(): ?string
    {
        return $this->subAccount;
    }
    /**
     * Set subAccount value
     * @param string $subAccount
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV3
     */
    public function setSubAccount(?string $subAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($subAccount) && !is_string($subAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subAccount, true), gettype($subAccount)), __LINE__);
        }
        $this->subAccount = $subAccount;
        
        return $this;
    }
    /**
     * Get toTheOrderOf value
     * @return string|null
     */
    public function getToTheOrderOf(): ?string
    {
        return $this->toTheOrderOf;
    }
    /**
     * Set toTheOrderOf value
     * @param string $toTheOrderOf
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV3
     */
    public function setToTheOrderOf(?string $toTheOrderOf = null): self
    {
        // validation for constraint: string
        if (!is_null($toTheOrderOf) && !is_string($toTheOrderOf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toTheOrderOf, true), gettype($toTheOrderOf)), __LINE__);
        }
        $this->toTheOrderOf = $toTheOrderOf;
        
        return $this;
    }
}
