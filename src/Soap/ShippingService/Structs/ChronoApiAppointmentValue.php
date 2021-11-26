<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for appointmentValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiAppointmentValue extends AbstractStructBase
{
    /**
     * The timeSlotEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timeSlotEndDate = null;
    /**
     * The timeSlotStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timeSlotStartDate = null;
    /**
     * The timeSlotTariffLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timeSlotTariffLevel = null;
    /**
     * Constructor method for appointmentValue
     * @uses ChronoApiAppointmentValue::setTimeSlotEndDate()
     * @uses ChronoApiAppointmentValue::setTimeSlotStartDate()
     * @uses ChronoApiAppointmentValue::setTimeSlotTariffLevel()
     * @param string $timeSlotEndDate
     * @param string $timeSlotStartDate
     * @param string $timeSlotTariffLevel
     */
    public function __construct(?string $timeSlotEndDate = null, ?string $timeSlotStartDate = null, ?string $timeSlotTariffLevel = null)
    {
        $this
            ->setTimeSlotEndDate($timeSlotEndDate)
            ->setTimeSlotStartDate($timeSlotStartDate)
            ->setTimeSlotTariffLevel($timeSlotTariffLevel);
    }
    /**
     * Get timeSlotEndDate value
     * @return string|null
     */
    public function getTimeSlotEndDate(): ?string
    {
        return $this->timeSlotEndDate;
    }
    /**
     * Set timeSlotEndDate value
     * @param string $timeSlotEndDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue
     */
    public function setTimeSlotEndDate(?string $timeSlotEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($timeSlotEndDate) && !is_string($timeSlotEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotEndDate, true), gettype($timeSlotEndDate)), __LINE__);
        }
        $this->timeSlotEndDate = $timeSlotEndDate;
        
        return $this;
    }
    /**
     * Get timeSlotStartDate value
     * @return string|null
     */
    public function getTimeSlotStartDate(): ?string
    {
        return $this->timeSlotStartDate;
    }
    /**
     * Set timeSlotStartDate value
     * @param string $timeSlotStartDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue
     */
    public function setTimeSlotStartDate(?string $timeSlotStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($timeSlotStartDate) && !is_string($timeSlotStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotStartDate, true), gettype($timeSlotStartDate)), __LINE__);
        }
        $this->timeSlotStartDate = $timeSlotStartDate;
        
        return $this;
    }
    /**
     * Get timeSlotTariffLevel value
     * @return string|null
     */
    public function getTimeSlotTariffLevel(): ?string
    {
        return $this->timeSlotTariffLevel;
    }
    /**
     * Set timeSlotTariffLevel value
     * @param string $timeSlotTariffLevel
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue
     */
    public function setTimeSlotTariffLevel(?string $timeSlotTariffLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($timeSlotTariffLevel) && !is_string($timeSlotTariffLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotTariffLevel, true), gettype($timeSlotTariffLevel)), __LINE__);
        }
        $this->timeSlotTariffLevel = $timeSlotTariffLevel;
        
        return $this;
    }
}
