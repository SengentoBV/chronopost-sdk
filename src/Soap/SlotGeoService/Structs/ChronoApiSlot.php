<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for slot Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSlot extends AbstractStructBase
{
    /**
     * The deliverySlotCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $deliverySlotCode = null;
    /**
     * The deliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $deliveryDate = null;
    /**
     * The dayOfWeek
     * @var int|null
     */
    protected ?int $dayOfWeek = null;
    /**
     * The startHour
     * @var int|null
     */
    protected ?int $startHour = null;
    /**
     * The startMinutes
     * @var int|null
     */
    protected ?int $startMinutes = null;
    /**
     * The endHour
     * @var int|null
     */
    protected ?int $endHour = null;
    /**
     * The endMinutes
     * @var int|null
     */
    protected ?int $endMinutes = null;
    /**
     * The tariffLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tariffLevel = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The codeStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeStatus = null;
    /**
     * The note
     * @var int|null
     */
    protected ?int $note = null;
    /**
     * The incentiveFlag
     * @var bool|null
     */
    protected ?bool $incentiveFlag = null;
    /**
     * The rawRank
     * @var int|null
     */
    protected ?int $rawRank = null;
    /**
     * The rank
     * @var int|null
     */
    protected ?int $rank = null;
    /**
     * Constructor method for slot
     * @uses ChronoApiSlot::setDeliverySlotCode()
     * @uses ChronoApiSlot::setDeliveryDate()
     * @uses ChronoApiSlot::setDayOfWeek()
     * @uses ChronoApiSlot::setStartHour()
     * @uses ChronoApiSlot::setStartMinutes()
     * @uses ChronoApiSlot::setEndHour()
     * @uses ChronoApiSlot::setEndMinutes()
     * @uses ChronoApiSlot::setTariffLevel()
     * @uses ChronoApiSlot::setStatus()
     * @uses ChronoApiSlot::setCodeStatus()
     * @uses ChronoApiSlot::setNote()
     * @uses ChronoApiSlot::setIncentiveFlag()
     * @uses ChronoApiSlot::setRawRank()
     * @uses ChronoApiSlot::setRank()
     * @param string $deliverySlotCode
     * @param string $deliveryDate
     * @param int $dayOfWeek
     * @param int $startHour
     * @param int $startMinutes
     * @param int $endHour
     * @param int $endMinutes
     * @param string $tariffLevel
     * @param string $status
     * @param string $codeStatus
     * @param int $note
     * @param bool $incentiveFlag
     * @param int $rawRank
     * @param int $rank
     */
    public function __construct(?string $deliverySlotCode = null, ?string $deliveryDate = null, ?int $dayOfWeek = null, ?int $startHour = null, ?int $startMinutes = null, ?int $endHour = null, ?int $endMinutes = null, ?string $tariffLevel = null, ?string $status = null, ?string $codeStatus = null, ?int $note = null, ?bool $incentiveFlag = null, ?int $rawRank = null, ?int $rank = null)
    {
        $this
            ->setDeliverySlotCode($deliverySlotCode)
            ->setDeliveryDate($deliveryDate)
            ->setDayOfWeek($dayOfWeek)
            ->setStartHour($startHour)
            ->setStartMinutes($startMinutes)
            ->setEndHour($endHour)
            ->setEndMinutes($endMinutes)
            ->setTariffLevel($tariffLevel)
            ->setStatus($status)
            ->setCodeStatus($codeStatus)
            ->setNote($note)
            ->setIncentiveFlag($incentiveFlag)
            ->setRawRank($rawRank)
            ->setRank($rank);
    }
    /**
     * Get deliverySlotCode value
     * @return string|null
     */
    public function getDeliverySlotCode(): ?string
    {
        return $this->deliverySlotCode;
    }
    /**
     * Set deliverySlotCode value
     * @param string $deliverySlotCode
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setDeliverySlotCode(?string $deliverySlotCode = null): self
    {
        // validation for constraint: string
        if (!is_null($deliverySlotCode) && !is_string($deliverySlotCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliverySlotCode, true), gettype($deliverySlotCode)), __LINE__);
        }
        $this->deliverySlotCode = $deliverySlotCode;
        
        return $this;
    }
    /**
     * Get deliveryDate value
     * @return string|null
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }
    /**
     * Set deliveryDate value
     * @param string $deliveryDate
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setDeliveryDate(?string $deliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        $this->deliveryDate = $deliveryDate;
        
        return $this;
    }
    /**
     * Get dayOfWeek value
     * @return int|null
     */
    public function getDayOfWeek(): ?int
    {
        return $this->dayOfWeek;
    }
    /**
     * Set dayOfWeek value
     * @param int $dayOfWeek
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setDayOfWeek(?int $dayOfWeek = null): self
    {
        // validation for constraint: int
        if (!is_null($dayOfWeek) && !(is_int($dayOfWeek) || ctype_digit($dayOfWeek))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayOfWeek, true), gettype($dayOfWeek)), __LINE__);
        }
        $this->dayOfWeek = $dayOfWeek;
        
        return $this;
    }
    /**
     * Get startHour value
     * @return int|null
     */
    public function getStartHour(): ?int
    {
        return $this->startHour;
    }
    /**
     * Set startHour value
     * @param int $startHour
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setStartHour(?int $startHour = null): self
    {
        // validation for constraint: int
        if (!is_null($startHour) && !(is_int($startHour) || ctype_digit($startHour))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startHour, true), gettype($startHour)), __LINE__);
        }
        $this->startHour = $startHour;
        
        return $this;
    }
    /**
     * Get startMinutes value
     * @return int|null
     */
    public function getStartMinutes(): ?int
    {
        return $this->startMinutes;
    }
    /**
     * Set startMinutes value
     * @param int $startMinutes
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setStartMinutes(?int $startMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($startMinutes) && !(is_int($startMinutes) || ctype_digit($startMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startMinutes, true), gettype($startMinutes)), __LINE__);
        }
        $this->startMinutes = $startMinutes;
        
        return $this;
    }
    /**
     * Get endHour value
     * @return int|null
     */
    public function getEndHour(): ?int
    {
        return $this->endHour;
    }
    /**
     * Set endHour value
     * @param int $endHour
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setEndHour(?int $endHour = null): self
    {
        // validation for constraint: int
        if (!is_null($endHour) && !(is_int($endHour) || ctype_digit($endHour))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endHour, true), gettype($endHour)), __LINE__);
        }
        $this->endHour = $endHour;
        
        return $this;
    }
    /**
     * Get endMinutes value
     * @return int|null
     */
    public function getEndMinutes(): ?int
    {
        return $this->endMinutes;
    }
    /**
     * Set endMinutes value
     * @param int $endMinutes
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setEndMinutes(?int $endMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($endMinutes) && !(is_int($endMinutes) || ctype_digit($endMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endMinutes, true), gettype($endMinutes)), __LINE__);
        }
        $this->endMinutes = $endMinutes;
        
        return $this;
    }
    /**
     * Get tariffLevel value
     * @return string|null
     */
    public function getTariffLevel(): ?string
    {
        return $this->tariffLevel;
    }
    /**
     * Set tariffLevel value
     * @param string $tariffLevel
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setTariffLevel(?string $tariffLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffLevel) && !is_string($tariffLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffLevel, true), gettype($tariffLevel)), __LINE__);
        }
        $this->tariffLevel = $tariffLevel;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get codeStatus value
     * @return string|null
     */
    public function getCodeStatus(): ?string
    {
        return $this->codeStatus;
    }
    /**
     * Set codeStatus value
     * @param string $codeStatus
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setCodeStatus(?string $codeStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($codeStatus) && !is_string($codeStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeStatus, true), gettype($codeStatus)), __LINE__);
        }
        $this->codeStatus = $codeStatus;
        
        return $this;
    }
    /**
     * Get note value
     * @return int|null
     */
    public function getNote(): ?int
    {
        return $this->note;
    }
    /**
     * Set note value
     * @param int $note
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setNote(?int $note = null): self
    {
        // validation for constraint: int
        if (!is_null($note) && !(is_int($note) || ctype_digit($note))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->note = $note;
        
        return $this;
    }
    /**
     * Get incentiveFlag value
     * @return bool|null
     */
    public function getIncentiveFlag(): ?bool
    {
        return $this->incentiveFlag;
    }
    /**
     * Set incentiveFlag value
     * @param bool $incentiveFlag
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setIncentiveFlag(?bool $incentiveFlag = null): self
    {
        // validation for constraint: boolean
        if (!is_null($incentiveFlag) && !is_bool($incentiveFlag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($incentiveFlag, true), gettype($incentiveFlag)), __LINE__);
        }
        $this->incentiveFlag = $incentiveFlag;
        
        return $this;
    }
    /**
     * Get rawRank value
     * @return int|null
     */
    public function getRawRank(): ?int
    {
        return $this->rawRank;
    }
    /**
     * Set rawRank value
     * @param int $rawRank
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setRawRank(?int $rawRank = null): self
    {
        // validation for constraint: int
        if (!is_null($rawRank) && !(is_int($rawRank) || ctype_digit($rawRank))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rawRank, true), gettype($rawRank)), __LINE__);
        }
        $this->rawRank = $rawRank;
        
        return $this;
    }
    /**
     * Get rank value
     * @return int|null
     */
    public function getRank(): ?int
    {
        return $this->rank;
    }
    /**
     * Set rank value
     * @param int $rank
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSlot
     */
    public function setRank(?int $rank = null): self
    {
        // validation for constraint: int
        if (!is_null($rank) && !(is_int($rank) || ctype_digit($rank))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rank, true), gettype($rank)), __LINE__);
        }
        $this->rank = $rank;
        
        return $this;
    }
}
