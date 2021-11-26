<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recherchePointChronopostParIdResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointChronopostParIdResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRecherchePointChronopostParIdResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost[]
     */
    protected ?array $return = null;
    /**
     * Constructor method for recherchePointChronopostParIdResponse
     * @uses ChronoApiRecherchePointChronopostParIdResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost[] $return
     */
    public function __construct(?array $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost[]
     */
    public function getReturn(): ?array
    {
        return $this->return;
    }
    /**
     * This method is responsible for validating the values passed to the setReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnForArrayConstraintsFromSetReturn(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $recherchePointChronopostParIdResponseReturnItem) {
            // validation for constraint: itemType
            if (!$recherchePointChronopostParIdResponseReturnItem instanceof \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost) {
                $invalidValues[] = is_object($recherchePointChronopostParIdResponseReturnItem) ? get_class($recherchePointChronopostParIdResponseReturnItem) : sprintf('%s(%s)', gettype($recherchePointChronopostParIdResponseReturnItem), var_export($recherchePointChronopostParIdResponseReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The return property can only contain items of type \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set return value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost[] $return
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParIdResponse
     */
    public function setReturn(?array $return = null): self
    {
        // validation for constraint: array
        if ('' !== ($returnArrayErrorMessage = self::validateReturnForArrayConstraintsFromSetReturn($return))) {
            throw new InvalidArgumentException($returnArrayErrorMessage, __LINE__);
        }
        $this->return = $return;
        
        return $this;
    }
    /**
     * Add item to return value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost $item
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParIdResponse
     */
    public function addToReturn(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost) {
            throw new InvalidArgumentException(sprintf('The return property can only contain items of type \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->return[] = $item;
        
        return $this;
    }
}
