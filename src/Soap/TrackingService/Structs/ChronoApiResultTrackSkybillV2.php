<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackSkybillV2 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultTrackSkybillV2 extends AbstractStructBase
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
     * The listEventInfoComp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEventInfoComps|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEventInfoComps $listEventInfoComp = null;
    /**
     * Constructor method for resultTrackSkybillV2
     * @uses ChronoApiResultTrackSkybillV2::setErrorCode()
     * @uses ChronoApiResultTrackSkybillV2::setErrorMessage()
     * @uses ChronoApiResultTrackSkybillV2::setListEventInfoComp()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEventInfoComps $listEventInfoComp
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEventInfoComps $listEventInfoComp = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListEventInfoComp($listEventInfoComp);
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSkybillV2
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSkybillV2
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
     * Get listEventInfoComp value
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEventInfoComps|null
     */
    public function getListEventInfoComp(): ?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEventInfoComps
    {
        return $this->listEventInfoComp;
    }
    /**
     * Set listEventInfoComp value
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEventInfoComps $listEventInfoComp
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSkybillV2
     */
    public function setListEventInfoComp(?\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiListEventInfoComps $listEventInfoComp = null): self
    {
        $this->listEventInfoComp = $listEventInfoComp;
        
        return $this;
    }
}
