<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESD Structs
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESD
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiFaisabiliteESD extends AbstractStructBase
{
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue = null;
    /**
     * The retrievalDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $retrievalDateTime = null;
    /**
     * The closingDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $closingDateTime = null;
    /**
     * Constructor method for faisabiliteESD
     * @uses ChronoApiFaisabiliteESD::setShipperValue()
     * @uses ChronoApiFaisabiliteESD::setRetrievalDateTime()
     * @uses ChronoApiFaisabiliteESD::setClosingDateTime()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue
     * @param string $retrievalDateTime
     * @param string $closingDateTime
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue = null, ?string $retrievalDateTime = null, ?string $closingDateTime = null)
    {
        $this
            ->setShipperValue($shipperValue)
            ->setRetrievalDateTime($retrievalDateTime)
            ->setClosingDateTime($closingDateTime);
    }
    /**
     * Get shipperValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue|null
     */
    public function getShipperValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiFaisabiliteESD
     */
    public function setShipperValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get retrievalDateTime value
     * @return string|null
     */
    public function getRetrievalDateTime(): ?string
    {
        return $this->retrievalDateTime;
    }
    /**
     * Set retrievalDateTime value
     * @param string $retrievalDateTime
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiFaisabiliteESD
     */
    public function setRetrievalDateTime(?string $retrievalDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($retrievalDateTime) && !is_string($retrievalDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retrievalDateTime, true), gettype($retrievalDateTime)), __LINE__);
        }
        $this->retrievalDateTime = $retrievalDateTime;
        
        return $this;
    }
    /**
     * Get closingDateTime value
     * @return string|null
     */
    public function getClosingDateTime(): ?string
    {
        return $this->closingDateTime;
    }
    /**
     * Set closingDateTime value
     * @param string $closingDateTime
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiFaisabiliteESD
     */
    public function setClosingDateTime(?string $closingDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($closingDateTime) && !is_string($closingDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingDateTime, true), gettype($closingDateTime)), __LINE__);
        }
        $this->closingDateTime = $closingDateTime;
        
        return $this;
    }
}
