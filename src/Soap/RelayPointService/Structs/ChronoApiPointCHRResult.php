<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointCHRResult Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiPointCHRResult extends AbstractStructBase
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
     * The listePointRelais
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR[]
     */
    protected ?array $listePointRelais = null;
    /**
     * The qualiteReponse
     * @var int|null
     */
    protected ?int $qualiteReponse = null;
    /**
     * The wsRequestId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $wsRequestId = null;
    /**
     * Constructor method for pointCHRResult
     * @uses ChronoApiPointCHRResult::setErrorCode()
     * @uses ChronoApiPointCHRResult::setErrorMessage()
     * @uses ChronoApiPointCHRResult::setListePointRelais()
     * @uses ChronoApiPointCHRResult::setQualiteReponse()
     * @uses ChronoApiPointCHRResult::setWsRequestId()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR[] $listePointRelais
     * @param int $qualiteReponse
     * @param string $wsRequestId
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?array $listePointRelais = null, ?int $qualiteReponse = null, ?string $wsRequestId = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListePointRelais($listePointRelais)
            ->setQualiteReponse($qualiteReponse)
            ->setWsRequestId($wsRequestId);
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult
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
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult
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
     * Get listePointRelais value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR[]
     */
    public function getListePointRelais(): ?array
    {
        return isset($this->listePointRelais) ? $this->listePointRelais : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListePointRelais method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListePointRelais method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListePointRelaisForArrayConstraintsFromSetListePointRelais(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pointCHRResultListePointRelaisItem) {
            // validation for constraint: itemType
            if (!$pointCHRResultListePointRelaisItem instanceof \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR) {
                $invalidValues[] = is_object($pointCHRResultListePointRelaisItem) ? get_class($pointCHRResultListePointRelaisItem) : sprintf('%s(%s)', gettype($pointCHRResultListePointRelaisItem), var_export($pointCHRResultListePointRelaisItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listePointRelais property can only contain items of type \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listePointRelais value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR[] $listePointRelais
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult
     */
    public function setListePointRelais(?array $listePointRelais = null): self
    {
        // validation for constraint: array
        if ('' !== ($listePointRelaisArrayErrorMessage = self::validateListePointRelaisForArrayConstraintsFromSetListePointRelais($listePointRelais))) {
            throw new InvalidArgumentException($listePointRelaisArrayErrorMessage, __LINE__);
        }
        if (is_null($listePointRelais) || (is_array($listePointRelais) && empty($listePointRelais))) {
            unset($this->listePointRelais);
        } else {
            $this->listePointRelais = $listePointRelais;
        }
        
        return $this;
    }
    /**
     * Add item to listePointRelais value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR $item
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult
     */
    public function addToListePointRelais(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR) {
            throw new InvalidArgumentException(sprintf('The listePointRelais property can only contain items of type \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listePointRelais[] = $item;
        
        return $this;
    }
    /**
     * Get qualiteReponse value
     * @return int|null
     */
    public function getQualiteReponse(): ?int
    {
        return $this->qualiteReponse;
    }
    /**
     * Set qualiteReponse value
     * @param int $qualiteReponse
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult
     */
    public function setQualiteReponse(?int $qualiteReponse = null): self
    {
        // validation for constraint: int
        if (!is_null($qualiteReponse) && !(is_int($qualiteReponse) || ctype_digit($qualiteReponse))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($qualiteReponse, true), gettype($qualiteReponse)), __LINE__);
        }
        $this->qualiteReponse = $qualiteReponse;
        
        return $this;
    }
    /**
     * Get wsRequestId value
     * @return string|null
     */
    public function getWsRequestId(): ?string
    {
        return $this->wsRequestId;
    }
    /**
     * Set wsRequestId value
     * @param string $wsRequestId
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult
     */
    public function setWsRequestId(?string $wsRequestId = null): self
    {
        // validation for constraint: string
        if (!is_null($wsRequestId) && !is_string($wsRequestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wsRequestId, true), gettype($wsRequestId)), __LINE__);
        }
        $this->wsRequestId = $wsRequestId;
        
        return $this;
    }
}
