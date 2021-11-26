<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultGetRouting Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultGetRouting extends AbstractStructBase
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
     * The geopostResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult $geopostResult = null;
    /**
     * The posteComptable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $posteComptable = null;
    /**
     * Constructor method for resultGetRouting
     * @uses ChronoApiResultGetRouting::setErrorCode()
     * @uses ChronoApiResultGetRouting::setErrorMessage()
     * @uses ChronoApiResultGetRouting::setGeopostResult()
     * @uses ChronoApiResultGetRouting::setPosteComptable()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult $geopostResult
     * @param string $posteComptable
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult $geopostResult = null, ?string $posteComptable = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setGeopostResult($geopostResult)
            ->setPosteComptable($posteComptable);
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting
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
     * Get geopostResult value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult|null
     */
    public function getGeopostResult(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
    {
        return $this->geopostResult;
    }
    /**
     * Set geopostResult value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult $geopostResult
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting
     */
    public function setGeopostResult(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult $geopostResult = null): self
    {
        $this->geopostResult = $geopostResult;
        
        return $this;
    }
    /**
     * Get posteComptable value
     * @return string|null
     */
    public function getPosteComptable(): ?string
    {
        return $this->posteComptable;
    }
    /**
     * Set posteComptable value
     * @param string $posteComptable
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting
     */
    public function setPosteComptable(?string $posteComptable = null): self
    {
        // validation for constraint: string
        if (!is_null($posteComptable) && !is_string($posteComptable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posteComptable, true), gettype($posteComptable)), __LINE__);
        }
        $this->posteComptable = $posteComptable;
        
        return $this;
    }
}
