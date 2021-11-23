<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackSearch Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultTrackSearch extends AbstractStructBase
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
     * The listInfosPOD
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD[]
     */
    protected ?array $listInfosPOD = null;
    /**
     * Constructor method for resultTrackSearch
     * @uses ChronoApiResultTrackSearch::setErrorCode()
     * @uses ChronoApiResultTrackSearch::setErrorMessage()
     * @uses ChronoApiResultTrackSearch::setListInfosPOD()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD[] $listInfosPOD
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?array $listInfosPOD = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListInfosPOD($listInfosPOD);
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch
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
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch
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
     * Get listInfosPOD value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD[]
     */
    public function getListInfosPOD(): ?array
    {
        return isset($this->listInfosPOD) ? $this->listInfosPOD : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListInfosPOD method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListInfosPOD method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListInfosPODForArrayConstraintsFromSetListInfosPOD(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultTrackSearchListInfosPODItem) {
            // validation for constraint: itemType
            if (!$resultTrackSearchListInfosPODItem instanceof \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD) {
                $invalidValues[] = is_object($resultTrackSearchListInfosPODItem) ? get_class($resultTrackSearchListInfosPODItem) : sprintf('%s(%s)', gettype($resultTrackSearchListInfosPODItem), var_export($resultTrackSearchListInfosPODItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listInfosPOD property can only contain items of type \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listInfosPOD value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD[] $listInfosPOD
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch
     */
    public function setListInfosPOD(?array $listInfosPOD = null): self
    {
        // validation for constraint: array
        if ('' !== ($listInfosPODArrayErrorMessage = self::validateListInfosPODForArrayConstraintsFromSetListInfosPOD($listInfosPOD))) {
            throw new InvalidArgumentException($listInfosPODArrayErrorMessage, __LINE__);
        }
        if (is_null($listInfosPOD) || (is_array($listInfosPOD) && empty($listInfosPOD))) {
            unset($this->listInfosPOD);
        } else {
            $this->listInfosPOD = $listInfosPOD;
        }
        
        return $this;
    }
    /**
     * Add item to listInfosPOD value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD $item
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch
     */
    public function addToListInfosPOD(\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD) {
            throw new InvalidArgumentException(sprintf('The listInfosPOD property can only contain items of type \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiInfosPOD, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listInfosPOD[] = $item;
        
        return $this;
    }
}
