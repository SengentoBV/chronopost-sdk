<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdWithRefClientValueV2 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiEsdWithRefClientValueV2 extends ChronoApiEsdWithRefClientValue
{
    /**
     * The numberOfParcel
     * @var int|null
     */
    protected ?int $numberOfParcel = null;
    /**
     * The parcelsNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $parcelsNumber = null;
    /**
     * Constructor method for esdWithRefClientValueV2
     * @uses ChronoApiEsdWithRefClientValueV2::setNumberOfParcel()
     * @uses ChronoApiEsdWithRefClientValueV2::setParcelsNumber()
     * @param int $numberOfParcel
     * @param string[] $parcelsNumber
     */
    public function __construct(?int $numberOfParcel = null, ?array $parcelsNumber = null)
    {
        $this
            ->setNumberOfParcel($numberOfParcel)
            ->setParcelsNumber($parcelsNumber);
    }
    /**
     * Get numberOfParcel value
     * @return int|null
     */
    public function getNumberOfParcel(): ?int
    {
        return $this->numberOfParcel;
    }
    /**
     * Set numberOfParcel value
     * @param int $numberOfParcel
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValueV2
     */
    public function setNumberOfParcel(?int $numberOfParcel = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;
        
        return $this;
    }
    /**
     * Get parcelsNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getParcelsNumber(): ?array
    {
        return isset($this->parcelsNumber) ? $this->parcelsNumber : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParcelsNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelsNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelsNumberForArrayConstraintsFromSetParcelsNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $esdWithRefClientValueV2ParcelsNumberItem) {
            // validation for constraint: itemType
            if (!is_string($esdWithRefClientValueV2ParcelsNumberItem)) {
                $invalidValues[] = is_object($esdWithRefClientValueV2ParcelsNumberItem) ? get_class($esdWithRefClientValueV2ParcelsNumberItem) : sprintf('%s(%s)', gettype($esdWithRefClientValueV2ParcelsNumberItem), var_export($esdWithRefClientValueV2ParcelsNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parcelsNumber property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set parcelsNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $parcelsNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValueV2
     */
    public function setParcelsNumber(?array $parcelsNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelsNumberArrayErrorMessage = self::validateParcelsNumberForArrayConstraintsFromSetParcelsNumber($parcelsNumber))) {
            throw new InvalidArgumentException($parcelsNumberArrayErrorMessage, __LINE__);
        }
        if (is_null($parcelsNumber) || (is_array($parcelsNumber) && empty($parcelsNumber))) {
            unset($this->parcelsNumber);
        } else {
            $this->parcelsNumber = $parcelsNumber;
        }
        
        return $this;
    }
    /**
     * Add item to parcelsNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValueV2
     */
    public function addToParcelsNumber(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The parcelsNumber property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parcelsNumber[] = $item;
        
        return $this;
    }
}
