<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for event Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiEvent extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The eventDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eventDate = null;
    /**
     * The eventLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eventLabel = null;
    /**
     * The highPriority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $highPriority = null;
    /**
     * The NPC
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NPC = null;
    /**
     * The officeLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $officeLabel = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * Constructor method for event
     * @uses ChronoApiEvent::setCode()
     * @uses ChronoApiEvent::setEventDate()
     * @uses ChronoApiEvent::setEventLabel()
     * @uses ChronoApiEvent::setHighPriority()
     * @uses ChronoApiEvent::setNPC()
     * @uses ChronoApiEvent::setOfficeLabel()
     * @uses ChronoApiEvent::setZipCode()
     * @param string $code
     * @param string $eventDate
     * @param string $eventLabel
     * @param bool $highPriority
     * @param string $nPC
     * @param string $officeLabel
     * @param string $zipCode
     */
    public function __construct(?string $code = null, ?string $eventDate = null, ?string $eventLabel = null, ?bool $highPriority = null, ?string $nPC = null, ?string $officeLabel = null, ?string $zipCode = null)
    {
        $this
            ->setCode($code)
            ->setEventDate($eventDate)
            ->setEventLabel($eventLabel)
            ->setHighPriority($highPriority)
            ->setNPC($nPC)
            ->setOfficeLabel($officeLabel)
            ->setZipCode($zipCode);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get eventDate value
     * @return string|null
     */
    public function getEventDate(): ?string
    {
        return $this->eventDate;
    }
    /**
     * Set eventDate value
     * @param string $eventDate
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent
     */
    public function setEventDate(?string $eventDate = null): self
    {
        // validation for constraint: string
        if (!is_null($eventDate) && !is_string($eventDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventDate, true), gettype($eventDate)), __LINE__);
        }
        $this->eventDate = $eventDate;
        
        return $this;
    }
    /**
     * Get eventLabel value
     * @return string|null
     */
    public function getEventLabel(): ?string
    {
        return $this->eventLabel;
    }
    /**
     * Set eventLabel value
     * @param string $eventLabel
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent
     */
    public function setEventLabel(?string $eventLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($eventLabel) && !is_string($eventLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventLabel, true), gettype($eventLabel)), __LINE__);
        }
        $this->eventLabel = $eventLabel;
        
        return $this;
    }
    /**
     * Get highPriority value
     * @return bool|null
     */
    public function getHighPriority(): ?bool
    {
        return $this->highPriority;
    }
    /**
     * Set highPriority value
     * @param bool $highPriority
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent
     */
    public function setHighPriority(?bool $highPriority = null): self
    {
        // validation for constraint: boolean
        if (!is_null($highPriority) && !is_bool($highPriority)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($highPriority, true), gettype($highPriority)), __LINE__);
        }
        $this->highPriority = $highPriority;
        
        return $this;
    }
    /**
     * Get NPC value
     * @return string|null
     */
    public function getNPC(): ?string
    {
        return $this->NPC;
    }
    /**
     * Set NPC value
     * @param string $nPC
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent
     */
    public function setNPC(?string $nPC = null): self
    {
        // validation for constraint: string
        if (!is_null($nPC) && !is_string($nPC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nPC, true), gettype($nPC)), __LINE__);
        }
        $this->NPC = $nPC;
        
        return $this;
    }
    /**
     * Get officeLabel value
     * @return string|null
     */
    public function getOfficeLabel(): ?string
    {
        return $this->officeLabel;
    }
    /**
     * Set officeLabel value
     * @param string $officeLabel
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent
     */
    public function setOfficeLabel(?string $officeLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($officeLabel) && !is_string($officeLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($officeLabel, true), gettype($officeLabel)), __LINE__);
        }
        $this->officeLabel = $officeLabel;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiEvent
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
}
