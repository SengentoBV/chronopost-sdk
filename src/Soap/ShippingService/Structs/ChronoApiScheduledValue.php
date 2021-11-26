<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for scheduledValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiScheduledValue extends AbstractStructBase
{
    /**
     * The appointmentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue $appointmentValue = null;
    /**
     * The expirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $expirationDate = null;
    /**
     * The sellByDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sellByDate = null;
    /**
     * Constructor method for scheduledValue
     * @uses ChronoApiScheduledValue::setAppointmentValue()
     * @uses ChronoApiScheduledValue::setExpirationDate()
     * @uses ChronoApiScheduledValue::setSellByDate()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue $appointmentValue
     * @param string $expirationDate
     * @param string $sellByDate
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue $appointmentValue = null, ?string $expirationDate = null, ?string $sellByDate = null)
    {
        $this
            ->setAppointmentValue($appointmentValue)
            ->setExpirationDate($expirationDate)
            ->setSellByDate($sellByDate);
    }
    /**
     * Get appointmentValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue|null
     */
    public function getAppointmentValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue
    {
        return $this->appointmentValue;
    }
    /**
     * Set appointmentValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue $appointmentValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue
     */
    public function setAppointmentValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAppointmentValue $appointmentValue = null): self
    {
        $this->appointmentValue = $appointmentValue;
        
        return $this;
    }
    /**
     * Get expirationDate value
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }
    /**
     * Set expirationDate value
     * @param string $expirationDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;
        
        return $this;
    }
    /**
     * Get sellByDate value
     * @return string|null
     */
    public function getSellByDate(): ?string
    {
        return $this->sellByDate;
    }
    /**
     * Set sellByDate value
     * @param string $sellByDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiScheduledValue
     */
    public function setSellByDate(?string $sellByDate = null): self
    {
        // validation for constraint: string
        if (!is_null($sellByDate) && !is_string($sellByDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellByDate, true), gettype($sellByDate)), __LINE__);
        }
        $this->sellByDate = $sellByDate;
        
        return $this;
    }
}
