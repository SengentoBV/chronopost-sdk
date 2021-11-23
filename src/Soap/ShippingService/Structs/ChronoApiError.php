<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for error Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiError extends AbstractStructBase
{
    /**
     * The detail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDetail|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDetail $detail = null;
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
     * Constructor method for error
     * @uses ChronoApiError::setDetail()
     * @uses ChronoApiError::setErrorCode()
     * @uses ChronoApiError::setErrorMessage()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDetail $detail
     * @param int $errorCode
     * @param string $errorMessage
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDetail $detail = null, ?int $errorCode = null, ?string $errorMessage = null)
    {
        $this
            ->setDetail($detail)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get detail value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDetail|null
     */
    public function getDetail(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDetail
    {
        return $this->detail;
    }
    /**
     * Set detail value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDetail $detail
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError
     */
    public function setDetail(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDetail $detail = null): self
    {
        $this->detail = $detail;
        
        return $this;
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError
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
}
