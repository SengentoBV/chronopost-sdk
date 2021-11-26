<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geopostResult Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiGeopostResult extends AbstractStructBase
{
    /**
     * The barcodeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $barcodeId = null;
    /**
     * The barcodePostcode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $barcodePostcode = null;
    /**
     * The buAlphaString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $buAlphaString = null;
    /**
     * The buCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $buCode = null;
    /**
     * The CSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CSort = null;
    /**
     * The DCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DCountry = null;
    /**
     * The DDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DDepot = null;
    /**
     * The DDepotCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DDepotCountry = null;
    /**
     * The DDepotStr
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DDepotStr = null;
    /**
     * The DSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DSort = null;
    /**
     * The groupingPriority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $groupingPriority = null;
    /**
     * The networkCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $networkCode = null;
    /**
     * The OSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OSort = null;
    /**
     * The partnerCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $partnerCode = null;
    /**
     * The SSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SSort = null;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceMark = null;
    /**
     * The serviceText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceText = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * Constructor method for geopostResult
     * @uses ChronoApiGeopostResult::setBarcodeId()
     * @uses ChronoApiGeopostResult::setBarcodePostcode()
     * @uses ChronoApiGeopostResult::setBuAlphaString()
     * @uses ChronoApiGeopostResult::setBuCode()
     * @uses ChronoApiGeopostResult::setCSort()
     * @uses ChronoApiGeopostResult::setDCountry()
     * @uses ChronoApiGeopostResult::setDDepot()
     * @uses ChronoApiGeopostResult::setDDepotCountry()
     * @uses ChronoApiGeopostResult::setDDepotStr()
     * @uses ChronoApiGeopostResult::setDSort()
     * @uses ChronoApiGeopostResult::setGroupingPriority()
     * @uses ChronoApiGeopostResult::setNetworkCode()
     * @uses ChronoApiGeopostResult::setOSort()
     * @uses ChronoApiGeopostResult::setPartnerCode()
     * @uses ChronoApiGeopostResult::setSSort()
     * @uses ChronoApiGeopostResult::setServiceMark()
     * @uses ChronoApiGeopostResult::setServiceText()
     * @uses ChronoApiGeopostResult::setVersion()
     * @param string $barcodeId
     * @param string $barcodePostcode
     * @param string $buAlphaString
     * @param string $buCode
     * @param string $cSort
     * @param string $dCountry
     * @param string $dDepot
     * @param string $dDepotCountry
     * @param string $dDepotStr
     * @param string $dSort
     * @param string $groupingPriority
     * @param string $networkCode
     * @param string $oSort
     * @param string $partnerCode
     * @param string $sSort
     * @param string $serviceMark
     * @param string $serviceText
     * @param string $version
     */
    public function __construct(?string $barcodeId = null, ?string $barcodePostcode = null, ?string $buAlphaString = null, ?string $buCode = null, ?string $cSort = null, ?string $dCountry = null, ?string $dDepot = null, ?string $dDepotCountry = null, ?string $dDepotStr = null, ?string $dSort = null, ?string $groupingPriority = null, ?string $networkCode = null, ?string $oSort = null, ?string $partnerCode = null, ?string $sSort = null, ?string $serviceMark = null, ?string $serviceText = null, ?string $version = null)
    {
        $this
            ->setBarcodeId($barcodeId)
            ->setBarcodePostcode($barcodePostcode)
            ->setBuAlphaString($buAlphaString)
            ->setBuCode($buCode)
            ->setCSort($cSort)
            ->setDCountry($dCountry)
            ->setDDepot($dDepot)
            ->setDDepotCountry($dDepotCountry)
            ->setDDepotStr($dDepotStr)
            ->setDSort($dSort)
            ->setGroupingPriority($groupingPriority)
            ->setNetworkCode($networkCode)
            ->setOSort($oSort)
            ->setPartnerCode($partnerCode)
            ->setSSort($sSort)
            ->setServiceMark($serviceMark)
            ->setServiceText($serviceText)
            ->setVersion($version);
    }
    /**
     * Get barcodeId value
     * @return string|null
     */
    public function getBarcodeId(): ?string
    {
        return $this->barcodeId;
    }
    /**
     * Set barcodeId value
     * @param string $barcodeId
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setBarcodeId(?string $barcodeId = null): self
    {
        // validation for constraint: string
        if (!is_null($barcodeId) && !is_string($barcodeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), gettype($barcodeId)), __LINE__);
        }
        $this->barcodeId = $barcodeId;
        
        return $this;
    }
    /**
     * Get barcodePostcode value
     * @return string|null
     */
    public function getBarcodePostcode(): ?string
    {
        return $this->barcodePostcode;
    }
    /**
     * Set barcodePostcode value
     * @param string $barcodePostcode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setBarcodePostcode(?string $barcodePostcode = null): self
    {
        // validation for constraint: string
        if (!is_null($barcodePostcode) && !is_string($barcodePostcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodePostcode, true), gettype($barcodePostcode)), __LINE__);
        }
        $this->barcodePostcode = $barcodePostcode;
        
        return $this;
    }
    /**
     * Get buAlphaString value
     * @return string|null
     */
    public function getBuAlphaString(): ?string
    {
        return $this->buAlphaString;
    }
    /**
     * Set buAlphaString value
     * @param string $buAlphaString
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setBuAlphaString(?string $buAlphaString = null): self
    {
        // validation for constraint: string
        if (!is_null($buAlphaString) && !is_string($buAlphaString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buAlphaString, true), gettype($buAlphaString)), __LINE__);
        }
        $this->buAlphaString = $buAlphaString;
        
        return $this;
    }
    /**
     * Get buCode value
     * @return string|null
     */
    public function getBuCode(): ?string
    {
        return $this->buCode;
    }
    /**
     * Set buCode value
     * @param string $buCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setBuCode(?string $buCode = null): self
    {
        // validation for constraint: string
        if (!is_null($buCode) && !is_string($buCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buCode, true), gettype($buCode)), __LINE__);
        }
        $this->buCode = $buCode;
        
        return $this;
    }
    /**
     * Get CSort value
     * @return string|null
     */
    public function getCSort(): ?string
    {
        return $this->CSort;
    }
    /**
     * Set CSort value
     * @param string $cSort
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setCSort(?string $cSort = null): self
    {
        // validation for constraint: string
        if (!is_null($cSort) && !is_string($cSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cSort, true), gettype($cSort)), __LINE__);
        }
        $this->CSort = $cSort;
        
        return $this;
    }
    /**
     * Get DCountry value
     * @return string|null
     */
    public function getDCountry(): ?string
    {
        return $this->DCountry;
    }
    /**
     * Set DCountry value
     * @param string $dCountry
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setDCountry(?string $dCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($dCountry) && !is_string($dCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dCountry, true), gettype($dCountry)), __LINE__);
        }
        $this->DCountry = $dCountry;
        
        return $this;
    }
    /**
     * Get DDepot value
     * @return string|null
     */
    public function getDDepot(): ?string
    {
        return $this->DDepot;
    }
    /**
     * Set DDepot value
     * @param string $dDepot
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setDDepot(?string $dDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($dDepot) && !is_string($dDepot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepot, true), gettype($dDepot)), __LINE__);
        }
        $this->DDepot = $dDepot;
        
        return $this;
    }
    /**
     * Get DDepotCountry value
     * @return string|null
     */
    public function getDDepotCountry(): ?string
    {
        return $this->DDepotCountry;
    }
    /**
     * Set DDepotCountry value
     * @param string $dDepotCountry
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setDDepotCountry(?string $dDepotCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($dDepotCountry) && !is_string($dDepotCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepotCountry, true), gettype($dDepotCountry)), __LINE__);
        }
        $this->DDepotCountry = $dDepotCountry;
        
        return $this;
    }
    /**
     * Get DDepotStr value
     * @return string|null
     */
    public function getDDepotStr(): ?string
    {
        return $this->DDepotStr;
    }
    /**
     * Set DDepotStr value
     * @param string $dDepotStr
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setDDepotStr(?string $dDepotStr = null): self
    {
        // validation for constraint: string
        if (!is_null($dDepotStr) && !is_string($dDepotStr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepotStr, true), gettype($dDepotStr)), __LINE__);
        }
        $this->DDepotStr = $dDepotStr;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
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
     * Get groupingPriority value
     * @return string|null
     */
    public function getGroupingPriority(): ?string
    {
        return $this->groupingPriority;
    }
    /**
     * Set groupingPriority value
     * @param string $groupingPriority
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setGroupingPriority(?string $groupingPriority = null): self
    {
        // validation for constraint: string
        if (!is_null($groupingPriority) && !is_string($groupingPriority)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupingPriority, true), gettype($groupingPriority)), __LINE__);
        }
        $this->groupingPriority = $groupingPriority;
        
        return $this;
    }
    /**
     * Get networkCode value
     * @return string|null
     */
    public function getNetworkCode(): ?string
    {
        return $this->networkCode;
    }
    /**
     * Set networkCode value
     * @param string $networkCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setNetworkCode(?string $networkCode = null): self
    {
        // validation for constraint: string
        if (!is_null($networkCode) && !is_string($networkCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkCode, true), gettype($networkCode)), __LINE__);
        }
        $this->networkCode = $networkCode;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
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
     * Get partnerCode value
     * @return string|null
     */
    public function getPartnerCode(): ?string
    {
        return $this->partnerCode;
    }
    /**
     * Set partnerCode value
     * @param string $partnerCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setPartnerCode(?string $partnerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerCode) && !is_string($partnerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerCode, true), gettype($partnerCode)), __LINE__);
        }
        $this->partnerCode = $partnerCode;
        
        return $this;
    }
    /**
     * Get SSort value
     * @return string|null
     */
    public function getSSort(): ?string
    {
        return $this->SSort;
    }
    /**
     * Set SSort value
     * @param string $sSort
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setSSort(?string $sSort = null): self
    {
        // validation for constraint: string
        if (!is_null($sSort) && !is_string($sSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSort, true), gettype($sSort)), __LINE__);
        }
        $this->SSort = $sSort;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
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
     * Get serviceText value
     * @return string|null
     */
    public function getServiceText(): ?string
    {
        return $this->serviceText;
    }
    /**
     * Set serviceText value
     * @param string $serviceText
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setServiceText(?string $serviceText = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceText) && !is_string($serviceText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceText, true), gettype($serviceText)), __LINE__);
        }
        $this->serviceText = $serviceText;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGeopostResult
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
}
