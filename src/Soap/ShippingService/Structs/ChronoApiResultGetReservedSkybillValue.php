<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultGetReservedSkybillValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultGetReservedSkybillValue extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The skybill
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybill = null;
    /**
     * Constructor method for resultGetReservedSkybillValue
     * @uses ChronoApiResultGetReservedSkybillValue::setErrorCode()
     * @uses ChronoApiResultGetReservedSkybillValue::setErrorMessage()
     * @uses ChronoApiResultGetReservedSkybillValue::setSkybill()
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $skybill
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?string $skybill = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setSkybill($skybill);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillValue
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillValue
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
     * Get skybill value
     * @return string|null
     */
    public function getSkybill(): ?string
    {
        return $this->skybill;
    }
    /**
     * Set skybill value
     * @param string $skybill
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillValue
     */
    public function setSkybill(?string $skybill = null): self
    {
        // validation for constraint: string
        if (!is_null($skybill) && !is_string($skybill)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybill, true), gettype($skybill)), __LINE__);
        }
        $this->skybill = $skybill;
        
        return $this;
    }
}
