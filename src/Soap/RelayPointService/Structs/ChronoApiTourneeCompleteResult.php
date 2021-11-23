<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tourneeCompleteResult Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiTourneeCompleteResult extends AbstractStructBase
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
     * The tourneeComplete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete $tourneeComplete = null;
    /**
     * Constructor method for tourneeCompleteResult
     * @uses ChronoApiTourneeCompleteResult::setErrorCode()
     * @uses ChronoApiTourneeCompleteResult::setErrorMessage()
     * @uses ChronoApiTourneeCompleteResult::setTourneeComplete()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete $tourneeComplete
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete $tourneeComplete = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setTourneeComplete($tourneeComplete);
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult
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
     * Get tourneeComplete value
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete|null
     */
    public function getTourneeComplete(): ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete
    {
        return $this->tourneeComplete;
    }
    /**
     * Set tourneeComplete value
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete $tourneeComplete
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult
     */
    public function setTourneeComplete(?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeComplete $tourneeComplete = null): self
    {
        $this->tourneeComplete = $tourneeComplete;
        
        return $this;
    }
}
