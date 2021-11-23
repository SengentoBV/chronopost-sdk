<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultReservationExpeditionValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultReservationExpeditionValue extends AbstractStructBase
{
    /**
     * The codeDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeDepot = null;
    /**
     * The codeService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeService = null;
    /**
     * The DSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DSort = null;
    /**
     * The destinationDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationDepot = null;
    /**
     * The ESDFullNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ESDFullNumber = null;
    /**
     * The ESDNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ESDNumber = null;
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
     * The geoPostCodeBarre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $geoPostCodeBarre = null;
    /**
     * The geoPostNumeroColis
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $geoPostNumeroColis = null;
    /**
     * The groupingPriorityLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $groupingPriorityLabel = null;
    /**
     * The OSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OSort = null;
    /**
     * The pickupDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pickupDate = null;
    /**
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reservationNumber = null;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceMark = null;
    /**
     * The serviceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The signaletiqueProduit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $signaletiqueProduit = null;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillNumber = null;
    /**
     * Constructor method for resultReservationExpeditionValue
     * @uses ChronoApiResultReservationExpeditionValue::setCodeDepot()
     * @uses ChronoApiResultReservationExpeditionValue::setCodeService()
     * @uses ChronoApiResultReservationExpeditionValue::setDSort()
     * @uses ChronoApiResultReservationExpeditionValue::setDestinationDepot()
     * @uses ChronoApiResultReservationExpeditionValue::setESDFullNumber()
     * @uses ChronoApiResultReservationExpeditionValue::setESDNumber()
     * @uses ChronoApiResultReservationExpeditionValue::setErrorCode()
     * @uses ChronoApiResultReservationExpeditionValue::setErrorMessage()
     * @uses ChronoApiResultReservationExpeditionValue::setGeoPostCodeBarre()
     * @uses ChronoApiResultReservationExpeditionValue::setGeoPostNumeroColis()
     * @uses ChronoApiResultReservationExpeditionValue::setGroupingPriorityLabel()
     * @uses ChronoApiResultReservationExpeditionValue::setOSort()
     * @uses ChronoApiResultReservationExpeditionValue::setPickupDate()
     * @uses ChronoApiResultReservationExpeditionValue::setReservationNumber()
     * @uses ChronoApiResultReservationExpeditionValue::setServiceMark()
     * @uses ChronoApiResultReservationExpeditionValue::setServiceName()
     * @uses ChronoApiResultReservationExpeditionValue::setSignaletiqueProduit()
     * @uses ChronoApiResultReservationExpeditionValue::setSkybillNumber()
     * @param string $codeDepot
     * @param string $codeService
     * @param string $dSort
     * @param string $destinationDepot
     * @param string $eSDFullNumber
     * @param string $eSDNumber
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $geoPostCodeBarre
     * @param string $geoPostNumeroColis
     * @param string $groupingPriorityLabel
     * @param string $oSort
     * @param string $pickupDate
     * @param string $reservationNumber
     * @param string $serviceMark
     * @param string $serviceName
     * @param string $signaletiqueProduit
     * @param string $skybillNumber
     */
    public function __construct(?string $codeDepot = null, ?string $codeService = null, ?string $dSort = null, ?string $destinationDepot = null, ?string $eSDFullNumber = null, ?string $eSDNumber = null, ?int $errorCode = null, ?string $errorMessage = null, ?string $geoPostCodeBarre = null, ?string $geoPostNumeroColis = null, ?string $groupingPriorityLabel = null, ?string $oSort = null, ?string $pickupDate = null, ?string $reservationNumber = null, ?string $serviceMark = null, ?string $serviceName = null, ?string $signaletiqueProduit = null, ?string $skybillNumber = null)
    {
        $this
            ->setCodeDepot($codeDepot)
            ->setCodeService($codeService)
            ->setDSort($dSort)
            ->setDestinationDepot($destinationDepot)
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setGeoPostCodeBarre($geoPostCodeBarre)
            ->setGeoPostNumeroColis($geoPostNumeroColis)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setOSort($oSort)
            ->setPickupDate($pickupDate)
            ->setReservationNumber($reservationNumber)
            ->setServiceMark($serviceMark)
            ->setServiceName($serviceName)
            ->setSignaletiqueProduit($signaletiqueProduit)
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get codeDepot value
     * @return string|null
     */
    public function getCodeDepot(): ?string
    {
        return $this->codeDepot;
    }
    /**
     * Set codeDepot value
     * @param string $codeDepot
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setCodeDepot(?string $codeDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($codeDepot) && !is_string($codeDepot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeDepot, true), gettype($codeDepot)), __LINE__);
        }
        $this->codeDepot = $codeDepot;
        
        return $this;
    }
    /**
     * Get codeService value
     * @return string|null
     */
    public function getCodeService(): ?string
    {
        return $this->codeService;
    }
    /**
     * Set codeService value
     * @param string $codeService
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setCodeService(?string $codeService = null): self
    {
        // validation for constraint: string
        if (!is_null($codeService) && !is_string($codeService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeService, true), gettype($codeService)), __LINE__);
        }
        $this->codeService = $codeService;
        
        return $this;
    }
    /**
     * Get DSort value
     * @return string|null
     */
    public function getDSort(): ?string
    {
        return $this->DSort;
    }
    /**
     * Set DSort value
     * @param string $dSort
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setDSort(?string $dSort = null): self
    {
        // validation for constraint: string
        if (!is_null($dSort) && !is_string($dSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), gettype($dSort)), __LINE__);
        }
        $this->DSort = $dSort;
        
        return $this;
    }
    /**
     * Get destinationDepot value
     * @return string|null
     */
    public function getDestinationDepot(): ?string
    {
        return $this->destinationDepot;
    }
    /**
     * Set destinationDepot value
     * @param string $destinationDepot
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setDestinationDepot(?string $destinationDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDepot) && !is_string($destinationDepot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDepot, true), gettype($destinationDepot)), __LINE__);
        }
        $this->destinationDepot = $destinationDepot;
        
        return $this;
    }
    /**
     * Get ESDFullNumber value
     * @return string|null
     */
    public function getESDFullNumber(): ?string
    {
        return $this->ESDFullNumber;
    }
    /**
     * Set ESDFullNumber value
     * @param string $eSDFullNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setESDFullNumber(?string $eSDFullNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($eSDFullNumber) && !is_string($eSDFullNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDFullNumber, true), gettype($eSDFullNumber)), __LINE__);
        }
        $this->ESDFullNumber = $eSDFullNumber;
        
        return $this;
    }
    /**
     * Get ESDNumber value
     * @return string|null
     */
    public function getESDNumber(): ?string
    {
        return $this->ESDNumber;
    }
    /**
     * Set ESDNumber value
     * @param string $eSDNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setESDNumber(?string $eSDNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($eSDNumber) && !is_string($eSDNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDNumber, true), gettype($eSDNumber)), __LINE__);
        }
        $this->ESDNumber = $eSDNumber;
        
        return $this;
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
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
     * Get geoPostCodeBarre value
     * @return string|null
     */
    public function getGeoPostCodeBarre(): ?string
    {
        return $this->geoPostCodeBarre;
    }
    /**
     * Set geoPostCodeBarre value
     * @param string $geoPostCodeBarre
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setGeoPostCodeBarre(?string $geoPostCodeBarre = null): self
    {
        // validation for constraint: string
        if (!is_null($geoPostCodeBarre) && !is_string($geoPostCodeBarre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoPostCodeBarre, true), gettype($geoPostCodeBarre)), __LINE__);
        }
        $this->geoPostCodeBarre = $geoPostCodeBarre;
        
        return $this;
    }
    /**
     * Get geoPostNumeroColis value
     * @return string|null
     */
    public function getGeoPostNumeroColis(): ?string
    {
        return $this->geoPostNumeroColis;
    }
    /**
     * Set geoPostNumeroColis value
     * @param string $geoPostNumeroColis
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setGeoPostNumeroColis(?string $geoPostNumeroColis = null): self
    {
        // validation for constraint: string
        if (!is_null($geoPostNumeroColis) && !is_string($geoPostNumeroColis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoPostNumeroColis, true), gettype($geoPostNumeroColis)), __LINE__);
        }
        $this->geoPostNumeroColis = $geoPostNumeroColis;
        
        return $this;
    }
    /**
     * Get groupingPriorityLabel value
     * @return string|null
     */
    public function getGroupingPriorityLabel(): ?string
    {
        return $this->groupingPriorityLabel;
    }
    /**
     * Set groupingPriorityLabel value
     * @param string $groupingPriorityLabel
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setGroupingPriorityLabel(?string $groupingPriorityLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($groupingPriorityLabel) && !is_string($groupingPriorityLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupingPriorityLabel, true), gettype($groupingPriorityLabel)), __LINE__);
        }
        $this->groupingPriorityLabel = $groupingPriorityLabel;
        
        return $this;
    }
    /**
     * Get OSort value
     * @return string|null
     */
    public function getOSort(): ?string
    {
        return $this->OSort;
    }
    /**
     * Set OSort value
     * @param string $oSort
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setOSort(?string $oSort = null): self
    {
        // validation for constraint: string
        if (!is_null($oSort) && !is_string($oSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), gettype($oSort)), __LINE__);
        }
        $this->OSort = $oSort;
        
        return $this;
    }
    /**
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $pickupDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setPickupDate(?string $pickupDate = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
        
        return $this;
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
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
    /**
     * Get serviceMark value
     * @return string|null
     */
    public function getServiceMark(): ?string
    {
        return $this->serviceMark;
    }
    /**
     * Set serviceMark value
     * @param string $serviceMark
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setServiceMark(?string $serviceMark = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceMark) && !is_string($serviceMark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;
        
        return $this;
    }
    /**
     * Get serviceName value
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }
    /**
     * Set serviceName value
     * @param string $serviceName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setServiceName(?string $serviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->serviceName = $serviceName;
        
        return $this;
    }
    /**
     * Get signaletiqueProduit value
     * @return string|null
     */
    public function getSignaletiqueProduit(): ?string
    {
        return $this->signaletiqueProduit;
    }
    /**
     * Set signaletiqueProduit value
     * @param string $signaletiqueProduit
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setSignaletiqueProduit(?string $signaletiqueProduit = null): self
    {
        // validation for constraint: string
        if (!is_null($signaletiqueProduit) && !is_string($signaletiqueProduit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signaletiqueProduit, true), gettype($signaletiqueProduit)), __LINE__);
        }
        $this->signaletiqueProduit = $signaletiqueProduit;
        
        return $this;
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        
        return $this;
    }
}
