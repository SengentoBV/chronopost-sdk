<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillValue Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiSkybillValue extends AbstractStructBase
{
    /**
     * The bulkNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bulkNumber = null;
    /**
     * The codCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codCurrency = null;
    /**
     * The codValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $codValue = null;
    /**
     * The content1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content1 = null;
    /**
     * The content2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content2 = null;
    /**
     * The content3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content3 = null;
    /**
     * The content4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content4 = null;
    /**
     * The content5
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content5 = null;
    /**
     * The customsCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customsCurrency = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $customsValue = null;
    /**
     * The evtCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $evtCode = null;
    /**
     * The insuredCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $insuredCurrency = null;
    /**
     * The insuredValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $insuredValue = null;
    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $latitude = null;
    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $longitude = null;
    /**
     * The masterSkybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $masterSkybillNumber = null;
    /**
     * The objectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $objectType = null;
    /**
     * The portCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $portCurrency = null;
    /**
     * The portValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $portValue = null;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The qualite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $qualite = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service = null;
    /**
     * The shipDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipDate = null;
    /**
     * The shipHour
     * @var int|null
     */
    protected ?int $shipHour = null;
    /**
     * The skybillRank
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillRank = null;
    /**
     * The source
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $source = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $weight = null;
    /**
     * The weightUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weightUnit = null;
    /**
     * Constructor method for skybillValue
     * @uses ChronoApiSkybillValue::setBulkNumber()
     * @uses ChronoApiSkybillValue::setCodCurrency()
     * @uses ChronoApiSkybillValue::setCodValue()
     * @uses ChronoApiSkybillValue::setContent1()
     * @uses ChronoApiSkybillValue::setContent2()
     * @uses ChronoApiSkybillValue::setContent3()
     * @uses ChronoApiSkybillValue::setContent4()
     * @uses ChronoApiSkybillValue::setContent5()
     * @uses ChronoApiSkybillValue::setCustomsCurrency()
     * @uses ChronoApiSkybillValue::setCustomsValue()
     * @uses ChronoApiSkybillValue::setEvtCode()
     * @uses ChronoApiSkybillValue::setInsuredCurrency()
     * @uses ChronoApiSkybillValue::setInsuredValue()
     * @uses ChronoApiSkybillValue::setLatitude()
     * @uses ChronoApiSkybillValue::setLongitude()
     * @uses ChronoApiSkybillValue::setMasterSkybillNumber()
     * @uses ChronoApiSkybillValue::setObjectType()
     * @uses ChronoApiSkybillValue::setPortCurrency()
     * @uses ChronoApiSkybillValue::setPortValue()
     * @uses ChronoApiSkybillValue::setProductCode()
     * @uses ChronoApiSkybillValue::setQualite()
     * @uses ChronoApiSkybillValue::setService()
     * @uses ChronoApiSkybillValue::setShipDate()
     * @uses ChronoApiSkybillValue::setShipHour()
     * @uses ChronoApiSkybillValue::setSkybillRank()
     * @uses ChronoApiSkybillValue::setSource()
     * @uses ChronoApiSkybillValue::setWeight()
     * @uses ChronoApiSkybillValue::setWeightUnit()
     * @param string $bulkNumber
     * @param string $codCurrency
     * @param float $codValue
     * @param string $content1
     * @param string $content2
     * @param string $content3
     * @param string $content4
     * @param string $content5
     * @param string $customsCurrency
     * @param float $customsValue
     * @param string $evtCode
     * @param string $insuredCurrency
     * @param float $insuredValue
     * @param string $latitude
     * @param string $longitude
     * @param string $masterSkybillNumber
     * @param string $objectType
     * @param string $portCurrency
     * @param float $portValue
     * @param string $productCode
     * @param string $qualite
     * @param string $service
     * @param string $shipDate
     * @param int $shipHour
     * @param string $skybillRank
     * @param string $source
     * @param float $weight
     * @param string $weightUnit
     */
    public function __construct(?string $bulkNumber = null, ?string $codCurrency = null, ?float $codValue = null, ?string $content1 = null, ?string $content2 = null, ?string $content3 = null, ?string $content4 = null, ?string $content5 = null, ?string $customsCurrency = null, ?float $customsValue = null, ?string $evtCode = null, ?string $insuredCurrency = null, ?float $insuredValue = null, ?string $latitude = null, ?string $longitude = null, ?string $masterSkybillNumber = null, ?string $objectType = null, ?string $portCurrency = null, ?float $portValue = null, ?string $productCode = null, ?string $qualite = null, ?string $service = null, ?string $shipDate = null, ?int $shipHour = null, ?string $skybillRank = null, ?string $source = null, ?float $weight = null, ?string $weightUnit = null)
    {
        $this
            ->setBulkNumber($bulkNumber)
            ->setCodCurrency($codCurrency)
            ->setCodValue($codValue)
            ->setContent1($content1)
            ->setContent2($content2)
            ->setContent3($content3)
            ->setContent4($content4)
            ->setContent5($content5)
            ->setCustomsCurrency($customsCurrency)
            ->setCustomsValue($customsValue)
            ->setEvtCode($evtCode)
            ->setInsuredCurrency($insuredCurrency)
            ->setInsuredValue($insuredValue)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setMasterSkybillNumber($masterSkybillNumber)
            ->setObjectType($objectType)
            ->setPortCurrency($portCurrency)
            ->setPortValue($portValue)
            ->setProductCode($productCode)
            ->setQualite($qualite)
            ->setService($service)
            ->setShipDate($shipDate)
            ->setShipHour($shipHour)
            ->setSkybillRank($skybillRank)
            ->setSource($source)
            ->setWeight($weight)
            ->setWeightUnit($weightUnit);
    }
    /**
     * Get bulkNumber value
     * @return string|null
     */
    public function getBulkNumber(): ?string
    {
        return $this->bulkNumber;
    }
    /**
     * Set bulkNumber value
     * @param string $bulkNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setBulkNumber(?string $bulkNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bulkNumber) && !is_string($bulkNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bulkNumber, true), gettype($bulkNumber)), __LINE__);
        }
        $this->bulkNumber = $bulkNumber;
        
        return $this;
    }
    /**
     * Get codCurrency value
     * @return string|null
     */
    public function getCodCurrency(): ?string
    {
        return $this->codCurrency;
    }
    /**
     * Set codCurrency value
     * @param string $codCurrency
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setCodCurrency(?string $codCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($codCurrency) && !is_string($codCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codCurrency, true), gettype($codCurrency)), __LINE__);
        }
        $this->codCurrency = $codCurrency;
        
        return $this;
    }
    /**
     * Get codValue value
     * @return float|null
     */
    public function getCodValue(): ?float
    {
        return $this->codValue;
    }
    /**
     * Set codValue value
     * @param float $codValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setCodValue(?float $codValue = null): self
    {
        // validation for constraint: float
        if (!is_null($codValue) && !(is_float($codValue) || is_numeric($codValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($codValue, true), gettype($codValue)), __LINE__);
        }
        $this->codValue = $codValue;
        
        return $this;
    }
    /**
     * Get content1 value
     * @return string|null
     */
    public function getContent1(): ?string
    {
        return $this->content1;
    }
    /**
     * Set content1 value
     * @param string $content1
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setContent1(?string $content1 = null): self
    {
        // validation for constraint: string
        if (!is_null($content1) && !is_string($content1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content1, true), gettype($content1)), __LINE__);
        }
        $this->content1 = $content1;
        
        return $this;
    }
    /**
     * Get content2 value
     * @return string|null
     */
    public function getContent2(): ?string
    {
        return $this->content2;
    }
    /**
     * Set content2 value
     * @param string $content2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setContent2(?string $content2 = null): self
    {
        // validation for constraint: string
        if (!is_null($content2) && !is_string($content2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content2, true), gettype($content2)), __LINE__);
        }
        $this->content2 = $content2;
        
        return $this;
    }
    /**
     * Get content3 value
     * @return string|null
     */
    public function getContent3(): ?string
    {
        return $this->content3;
    }
    /**
     * Set content3 value
     * @param string $content3
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setContent3(?string $content3 = null): self
    {
        // validation for constraint: string
        if (!is_null($content3) && !is_string($content3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content3, true), gettype($content3)), __LINE__);
        }
        $this->content3 = $content3;
        
        return $this;
    }
    /**
     * Get content4 value
     * @return string|null
     */
    public function getContent4(): ?string
    {
        return $this->content4;
    }
    /**
     * Set content4 value
     * @param string $content4
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setContent4(?string $content4 = null): self
    {
        // validation for constraint: string
        if (!is_null($content4) && !is_string($content4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content4, true), gettype($content4)), __LINE__);
        }
        $this->content4 = $content4;
        
        return $this;
    }
    /**
     * Get content5 value
     * @return string|null
     */
    public function getContent5(): ?string
    {
        return $this->content5;
    }
    /**
     * Set content5 value
     * @param string $content5
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setContent5(?string $content5 = null): self
    {
        // validation for constraint: string
        if (!is_null($content5) && !is_string($content5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content5, true), gettype($content5)), __LINE__);
        }
        $this->content5 = $content5;
        
        return $this;
    }
    /**
     * Get customsCurrency value
     * @return string|null
     */
    public function getCustomsCurrency(): ?string
    {
        return $this->customsCurrency;
    }
    /**
     * Set customsCurrency value
     * @param string $customsCurrency
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setCustomsCurrency(?string $customsCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($customsCurrency) && !is_string($customsCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsCurrency, true), gettype($customsCurrency)), __LINE__);
        }
        $this->customsCurrency = $customsCurrency;
        
        return $this;
    }
    /**
     * Get customsValue value
     * @return float|null
     */
    public function getCustomsValue(): ?float
    {
        return $this->customsValue;
    }
    /**
     * Set customsValue value
     * @param float $customsValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setCustomsValue(?float $customsValue = null): self
    {
        // validation for constraint: float
        if (!is_null($customsValue) && !(is_float($customsValue) || is_numeric($customsValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customsValue, true), gettype($customsValue)), __LINE__);
        }
        $this->customsValue = $customsValue;
        
        return $this;
    }
    /**
     * Get evtCode value
     * @return string|null
     */
    public function getEvtCode(): ?string
    {
        return $this->evtCode;
    }
    /**
     * Set evtCode value
     * @param string $evtCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setEvtCode(?string $evtCode = null): self
    {
        // validation for constraint: string
        if (!is_null($evtCode) && !is_string($evtCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($evtCode, true), gettype($evtCode)), __LINE__);
        }
        $this->evtCode = $evtCode;
        
        return $this;
    }
    /**
     * Get insuredCurrency value
     * @return string|null
     */
    public function getInsuredCurrency(): ?string
    {
        return $this->insuredCurrency;
    }
    /**
     * Set insuredCurrency value
     * @param string $insuredCurrency
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setInsuredCurrency(?string $insuredCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($insuredCurrency) && !is_string($insuredCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuredCurrency, true), gettype($insuredCurrency)), __LINE__);
        }
        $this->insuredCurrency = $insuredCurrency;
        
        return $this;
    }
    /**
     * Get insuredValue value
     * @return float|null
     */
    public function getInsuredValue(): ?float
    {
        return $this->insuredValue;
    }
    /**
     * Set insuredValue value
     * @param float $insuredValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setInsuredValue(?float $insuredValue = null): self
    {
        // validation for constraint: float
        if (!is_null($insuredValue) && !(is_float($insuredValue) || is_numeric($insuredValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($insuredValue, true), gettype($insuredValue)), __LINE__);
        }
        $this->insuredValue = $insuredValue;
        
        return $this;
    }
    /**
     * Get latitude value
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param string $latitude
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setLatitude(?string $latitude = null): self
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;
        
        return $this;
    }
    /**
     * Get longitude value
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param string $longitude
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setLongitude(?string $longitude = null): self
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;
        
        return $this;
    }
    /**
     * Get masterSkybillNumber value
     * @return string|null
     */
    public function getMasterSkybillNumber(): ?string
    {
        return $this->masterSkybillNumber;
    }
    /**
     * Set masterSkybillNumber value
     * @param string $masterSkybillNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setMasterSkybillNumber(?string $masterSkybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($masterSkybillNumber) && !is_string($masterSkybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($masterSkybillNumber, true), gettype($masterSkybillNumber)), __LINE__);
        }
        $this->masterSkybillNumber = $masterSkybillNumber;
        
        return $this;
    }
    /**
     * Get objectType value
     * @return string|null
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }
    /**
     * Set objectType value
     * @param string $objectType
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setObjectType(?string $objectType = null): self
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;
        
        return $this;
    }
    /**
     * Get portCurrency value
     * @return string|null
     */
    public function getPortCurrency(): ?string
    {
        return $this->portCurrency;
    }
    /**
     * Set portCurrency value
     * @param string $portCurrency
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setPortCurrency(?string $portCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($portCurrency) && !is_string($portCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portCurrency, true), gettype($portCurrency)), __LINE__);
        }
        $this->portCurrency = $portCurrency;
        
        return $this;
    }
    /**
     * Get portValue value
     * @return float|null
     */
    public function getPortValue(): ?float
    {
        return $this->portValue;
    }
    /**
     * Set portValue value
     * @param float $portValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setPortValue(?float $portValue = null): self
    {
        // validation for constraint: float
        if (!is_null($portValue) && !(is_float($portValue) || is_numeric($portValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($portValue, true), gettype($portValue)), __LINE__);
        }
        $this->portValue = $portValue;
        
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        
        return $this;
    }
    /**
     * Get qualite value
     * @return string|null
     */
    public function getQualite(): ?string
    {
        return $this->qualite;
    }
    /**
     * Set qualite value
     * @param string $qualite
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setQualite(?string $qualite = null): self
    {
        // validation for constraint: string
        if (!is_null($qualite) && !is_string($qualite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qualite, true), gettype($qualite)), __LINE__);
        }
        $this->qualite = $qualite;
        
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
        
        return $this;
    }
    /**
     * Get shipDate value
     * @return string|null
     */
    public function getShipDate(): ?string
    {
        return $this->shipDate;
    }
    /**
     * Set shipDate value
     * @param string $shipDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setShipDate(?string $shipDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipDate, true), gettype($shipDate)), __LINE__);
        }
        $this->shipDate = $shipDate;
        
        return $this;
    }
    /**
     * Get shipHour value
     * @return int|null
     */
    public function getShipHour(): ?int
    {
        return $this->shipHour;
    }
    /**
     * Set shipHour value
     * @param int $shipHour
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setShipHour(?int $shipHour = null): self
    {
        // validation for constraint: int
        if (!is_null($shipHour) && !(is_int($shipHour) || ctype_digit($shipHour))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipHour, true), gettype($shipHour)), __LINE__);
        }
        $this->shipHour = $shipHour;
        
        return $this;
    }
    /**
     * Get skybillRank value
     * @return string|null
     */
    public function getSkybillRank(): ?string
    {
        return $this->skybillRank;
    }
    /**
     * Set skybillRank value
     * @param string $skybillRank
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setSkybillRank(?string $skybillRank = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillRank) && !is_string($skybillRank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillRank, true), gettype($skybillRank)), __LINE__);
        }
        $this->skybillRank = $skybillRank;
        
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->source = $source;
        
        return $this;
    }
    /**
     * Get weight value
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param float $weight
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setWeight(?float $weight = null): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get weightUnit value
     * @return string|null
     */
    public function getWeightUnit(): ?string
    {
        return $this->weightUnit;
    }
    /**
     * Set weightUnit value
     * @param string $weightUnit
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
     */
    public function setWeightUnit(?string $weightUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($weightUnit) && !is_string($weightUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weightUnit, true), gettype($weightUnit)), __LINE__);
        }
        $this->weightUnit = $weightUnit;
        
        return $this;
    }
}
