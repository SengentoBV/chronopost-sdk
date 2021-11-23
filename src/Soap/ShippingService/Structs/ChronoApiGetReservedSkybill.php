<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybill Structs
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybill
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiGetReservedSkybill extends AbstractStructBase
{
    /**
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reservationNumber = null;
    /**
     * Constructor method for getReservedSkybill
     * @uses ChronoApiGetReservedSkybill::setReservationNumber()
     * @param string $reservationNumber
     */
    public function __construct(?string $reservationNumber = null)
    {
        $this
            ->setReservationNumber($reservationNumber);
    }
    /**
     * Get reservationNumber value
     * @return string|null
     */
    public function getReservationNumber(): ?string
    {
        return $this->reservationNumber;
    }
    /**
     * Set reservationNumber value
     * @param string $reservationNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybill
     */
    public function setReservationNumber(?string $reservationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationNumber) && !is_string($reservationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationNumber, true), gettype($reservationNumber)), __LINE__);
        }
        $this->reservationNumber = $reservationNumber;
        
        return $this;
    }
}
