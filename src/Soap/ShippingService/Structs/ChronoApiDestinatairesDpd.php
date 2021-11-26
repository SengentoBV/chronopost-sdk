<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for destinatairesDpd Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiDestinatairesDpd extends AbstractStructBase
{
    /**
     * The destinataireDpd
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd[]
     */
    protected ?array $destinataireDpd = null;
    /**
     * Constructor method for destinatairesDpd
     * @uses ChronoApiDestinatairesDpd::setDestinataireDpd()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd[] $destinataireDpd
     */
    public function __construct(?array $destinataireDpd = null)
    {
        $this
            ->setDestinataireDpd($destinataireDpd);
    }
    /**
     * Get destinataireDpd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd[]
     */
    public function getDestinataireDpd(): ?array
    {
        return isset($this->destinataireDpd) ? $this->destinataireDpd : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDestinataireDpd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDestinataireDpd method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDestinataireDpdForArrayConstraintsFromSetDestinataireDpd(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $destinatairesDpdDestinataireDpdItem) {
            // validation for constraint: itemType
            if (!$destinatairesDpdDestinataireDpdItem instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd) {
                $invalidValues[] = is_object($destinatairesDpdDestinataireDpdItem) ? get_class($destinatairesDpdDestinataireDpdItem) : sprintf('%s(%s)', gettype($destinatairesDpdDestinataireDpdItem), var_export($destinatairesDpdDestinataireDpdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The destinataireDpd property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set destinataireDpd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd[] $destinataireDpd
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd
     */
    public function setDestinataireDpd(?array $destinataireDpd = null): self
    {
        // validation for constraint: array
        if ('' !== ($destinataireDpdArrayErrorMessage = self::validateDestinataireDpdForArrayConstraintsFromSetDestinataireDpd($destinataireDpd))) {
            throw new InvalidArgumentException($destinataireDpdArrayErrorMessage, __LINE__);
        }
        if (is_null($destinataireDpd) || (is_array($destinataireDpd) && empty($destinataireDpd))) {
            unset($this->destinataireDpd);
        } else {
            $this->destinataireDpd = $destinataireDpd;
        }
        
        return $this;
    }
    /**
     * Add item to destinataireDpd value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd $item
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinatairesDpd
     */
    public function addToDestinataireDpd(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd) {
            throw new InvalidArgumentException(sprintf('The destinataireDpd property can only contain items of type \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiDestinataireDpd, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->destinataireDpd[] = $item;
        
        return $this;
    }
}
