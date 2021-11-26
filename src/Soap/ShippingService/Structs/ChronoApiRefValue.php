<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for refValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRefValue extends AbstractStructBase
{
    /**
     * The customerSkybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerSkybillNumber = null;
    /**
     * The PCardTransactionNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PCardTransactionNumber = null;
    /**
     * The recipientRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientRef = null;
    /**
     * The shipperRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperRef = null;
    /**
     * Constructor method for refValue
     * @uses ChronoApiRefValue::setCustomerSkybillNumber()
     * @uses ChronoApiRefValue::setPCardTransactionNumber()
     * @uses ChronoApiRefValue::setRecipientRef()
     * @uses ChronoApiRefValue::setShipperRef()
     * @param string $customerSkybillNumber
     * @param string $pCardTransactionNumber
     * @param string $recipientRef
     * @param string $shipperRef
     */
    public function __construct(?string $customerSkybillNumber = null, ?string $pCardTransactionNumber = null, ?string $recipientRef = null, ?string $shipperRef = null)
    {
        $this
            ->setCustomerSkybillNumber($customerSkybillNumber)
            ->setPCardTransactionNumber($pCardTransactionNumber)
            ->setRecipientRef($recipientRef)
            ->setShipperRef($shipperRef);
    }
    /**
     * Get customerSkybillNumber value
     * @return string|null
     */
    public function getCustomerSkybillNumber(): ?string
    {
        return $this->customerSkybillNumber;
    }
    /**
     * Set customerSkybillNumber value
     * @param string $customerSkybillNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue
     */
    public function setCustomerSkybillNumber(?string $customerSkybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerSkybillNumber) && !is_string($customerSkybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerSkybillNumber, true), gettype($customerSkybillNumber)), __LINE__);
        }
        $this->customerSkybillNumber = $customerSkybillNumber;
        
        return $this;
    }
    /**
     * Get PCardTransactionNumber value
     * @return string|null
     */
    public function getPCardTransactionNumber(): ?string
    {
        return $this->PCardTransactionNumber;
    }
    /**
     * Set PCardTransactionNumber value
     * @param string $pCardTransactionNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue
     */
    public function setPCardTransactionNumber(?string $pCardTransactionNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($pCardTransactionNumber) && !is_string($pCardTransactionNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pCardTransactionNumber, true), gettype($pCardTransactionNumber)), __LINE__);
        }
        $this->PCardTransactionNumber = $pCardTransactionNumber;
        
        return $this;
    }
    /**
     * Get recipientRef value
     * @return string|null
     */
    public function getRecipientRef(): ?string
    {
        return $this->recipientRef;
    }
    /**
     * Set recipientRef value
     * @param string $recipientRef
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue
     */
    public function setRecipientRef(?string $recipientRef = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientRef) && !is_string($recipientRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientRef, true), gettype($recipientRef)), __LINE__);
        }
        $this->recipientRef = $recipientRef;
        
        return $this;
    }
    /**
     * Get shipperRef value
     * @return string|null
     */
    public function getShipperRef(): ?string
    {
        return $this->shipperRef;
    }
    /**
     * Set shipperRef value
     * @param string $shipperRef
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue
     */
    public function setShipperRef(?string $shipperRef = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperRef) && !is_string($shipperRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperRef, true), gettype($shipperRef)), __LINE__);
        }
        $this->shipperRef = $shipperRef;
        
        return $this;
    }
}
