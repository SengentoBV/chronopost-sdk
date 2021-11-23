<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultMultiParcelValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultMultiParcelValue extends AbstractStructBase
{
    /**
     * The asCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $asCode = null;
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
     * The destinationDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationDepot = null;
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
     * The pdfEtiquette
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pdfEtiquette = null;
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
     * The dSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dSort = null;
    /**
     * The oSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $oSort = null;
    /**
     * Constructor method for resultMultiParcelValue
     * @uses ChronoApiResultMultiParcelValue::setAsCode()
     * @uses ChronoApiResultMultiParcelValue::setCodeDepot()
     * @uses ChronoApiResultMultiParcelValue::setCodeService()
     * @uses ChronoApiResultMultiParcelValue::setDestinationDepot()
     * @uses ChronoApiResultMultiParcelValue::setGeoPostCodeBarre()
     * @uses ChronoApiResultMultiParcelValue::setGeoPostNumeroColis()
     * @uses ChronoApiResultMultiParcelValue::setGroupingPriorityLabel()
     * @uses ChronoApiResultMultiParcelValue::setPdfEtiquette()
     * @uses ChronoApiResultMultiParcelValue::setServiceMark()
     * @uses ChronoApiResultMultiParcelValue::setServiceName()
     * @uses ChronoApiResultMultiParcelValue::setSignaletiqueProduit()
     * @uses ChronoApiResultMultiParcelValue::setSkybillNumber()
     * @uses ChronoApiResultMultiParcelValue::setDSort()
     * @uses ChronoApiResultMultiParcelValue::setOSort()
     * @param string $asCode
     * @param string $codeDepot
     * @param string $codeService
     * @param string $destinationDepot
     * @param string $geoPostCodeBarre
     * @param string $geoPostNumeroColis
     * @param string $groupingPriorityLabel
     * @param string $pdfEtiquette
     * @param string $serviceMark
     * @param string $serviceName
     * @param string $signaletiqueProduit
     * @param string $skybillNumber
     * @param string $dSort
     * @param string $oSort
     */
    public function __construct(?string $asCode = null, ?string $codeDepot = null, ?string $codeService = null, ?string $destinationDepot = null, ?string $geoPostCodeBarre = null, ?string $geoPostNumeroColis = null, ?string $groupingPriorityLabel = null, ?string $pdfEtiquette = null, ?string $serviceMark = null, ?string $serviceName = null, ?string $signaletiqueProduit = null, ?string $skybillNumber = null, ?string $dSort = null, ?string $oSort = null)
    {
        $this
            ->setAsCode($asCode)
            ->setCodeDepot($codeDepot)
            ->setCodeService($codeService)
            ->setDestinationDepot($destinationDepot)
            ->setGeoPostCodeBarre($geoPostCodeBarre)
            ->setGeoPostNumeroColis($geoPostNumeroColis)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setPdfEtiquette($pdfEtiquette)
            ->setServiceMark($serviceMark)
            ->setServiceName($serviceName)
            ->setSignaletiqueProduit($signaletiqueProduit)
            ->setSkybillNumber($skybillNumber)
            ->setDSort($dSort)
            ->setOSort($oSort);
    }
    /**
     * Get asCode value
     * @return string|null
     */
    public function getAsCode(): ?string
    {
        return $this->asCode;
    }
    /**
     * Set asCode value
     * @param string $asCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
     */
    public function setAsCode(?string $asCode = null): self
    {
        // validation for constraint: string
        if (!is_null($asCode) && !is_string($asCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asCode, true), gettype($asCode)), __LINE__);
        }
        $this->asCode = $asCode;
        
        return $this;
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
     * Get pdfEtiquette value
     * @return string|null
     */
    public function getPdfEtiquette(): ?string
    {
        return $this->pdfEtiquette;
    }
    /**
     * Set pdfEtiquette value
     * @param string $pdfEtiquette
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
     */
    public function setPdfEtiquette(?string $pdfEtiquette = null): self
    {
        // validation for constraint: string
        if (!is_null($pdfEtiquette) && !is_string($pdfEtiquette)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfEtiquette, true), gettype($pdfEtiquette)), __LINE__);
        }
        $this->pdfEtiquette = $pdfEtiquette;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
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
    /**
     * Get dSort value
     * @return string|null
     */
    public function getDSort(): ?string
    {
        return $this->dSort;
    }
    /**
     * Set dSort value
     * @param string $dSort
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
     */
    public function setDSort(?string $dSort = null): self
    {
        // validation for constraint: string
        if (!is_null($dSort) && !is_string($dSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), gettype($dSort)), __LINE__);
        }
        $this->dSort = $dSort;
        
        return $this;
    }
    /**
     * Get oSort value
     * @return string|null
     */
    public function getOSort(): ?string
    {
        return $this->oSort;
    }
    /**
     * Set oSort value
     * @param string $oSort
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelValue
     */
    public function setOSort(?string $oSort = null): self
    {
        // validation for constraint: string
        if (!is_null($oSort) && !is_string($oSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), gettype($oSort)), __LINE__);
        }
        $this->oSort = $oSort;
        
        return $this;
    }
}
