<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackSkybill Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultTrackSkybill extends AbstractStructBase
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
     * The listEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEvents|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEvents $listEvents = null;
    /**
     * Constructor method for resultTrackSkybill
     * @uses ChronoApiResultTrackSkybill::setErrorCode()
     * @uses ChronoApiResultTrackSkybill::setErrorMessage()
     * @uses ChronoApiResultTrackSkybill::setListEvents()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEvents $listEvents
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEvents $listEvents = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListEvents($listEvents);
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSkybill
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSkybill
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
     * Get listEvents value
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEvents|null
     */
    public function getListEvents(): ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEvents
    {
        return $this->listEvents;
    }
    /**
     * Set listEvents value
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEvents $listEvents
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSkybill
     */
    public function setListEvents(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEvents $listEvents = null): self
    {
        $this->listEvents = $listEvents;
        
        return $this;
    }
}
