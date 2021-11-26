<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tourneeResult Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiTourneeResult extends AbstractStructBase
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
     * The tournee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee $tournee = null;
    /**
     * Constructor method for tourneeResult
     * @uses ChronoApiTourneeResult::setErrorCode()
     * @uses ChronoApiTourneeResult::setErrorMessage()
     * @uses ChronoApiTourneeResult::setTournee()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee $tournee
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee $tournee = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setTournee($tournee);
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult
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
     * Get tournee value
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee|null
     */
    public function getTournee(): ?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee
    {
        return $this->tournee;
    }
    /**
     * Set tournee value
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee $tournee
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult
     */
    public function setTournee(?\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee $tournee = null): self
    {
        $this->tournee = $tournee;
        
        return $this;
    }
}
