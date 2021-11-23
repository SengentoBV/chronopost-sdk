<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValueV5 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSkybillWithDimensionsValueV5 extends ChronoApiSkybillWithDimensionsValueV4
{
    /**
     * The carrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The skybillBackNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillBackNumber = null;
    /**
     * Constructor method for skybillWithDimensionsValueV5
     * @uses ChronoApiSkybillWithDimensionsValueV5::setCarrier()
     * @uses ChronoApiSkybillWithDimensionsValueV5::setSkybillBackNumber()
     * @param string $carrier
     * @param string $skybillBackNumber
     */
    public function __construct(?string $carrier = null, ?string $skybillBackNumber = null)
    {
        $this
            ->setCarrier($carrier)
            ->setSkybillBackNumber($skybillBackNumber);
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV5
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get skybillBackNumber value
     * @return string|null
     */
    public function getSkybillBackNumber(): ?string
    {
        return $this->skybillBackNumber;
    }
    /**
     * Set skybillBackNumber value
     * @param string $skybillBackNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillWithDimensionsValueV5
     */
    public function setSkybillBackNumber(?string $skybillBackNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillBackNumber) && !is_string($skybillBackNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillBackNumber, true), gettype($skybillBackNumber)), __LINE__);
        }
        $this->skybillBackNumber = $skybillBackNumber;
        
        return $this;
    }
}
