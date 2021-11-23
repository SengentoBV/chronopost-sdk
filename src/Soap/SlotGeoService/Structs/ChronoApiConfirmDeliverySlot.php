<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmDeliverySlot Structs
 * Meta information extracted from the WSDL
 * - type: tns:confirmDeliverySlot
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiConfirmDeliverySlot extends AbstractStructBase
{
    /**
     * The callerTool
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $callerTool = null;
    /**
     * The productType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The codeSlot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeSlot = null;
    /**
     * The meshCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $meshCode = null;
    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transactionID = null;
    /**
     * The rank
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rank = null;
    /**
     * The position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $position = null;
    /**
     * The dateSelected
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateSelected = null;
    /**
     * Constructor method for confirmDeliverySlot
     * @uses ChronoApiConfirmDeliverySlot::setCallerTool()
     * @uses ChronoApiConfirmDeliverySlot::setProductType()
     * @uses ChronoApiConfirmDeliverySlot::setCodeSlot()
     * @uses ChronoApiConfirmDeliverySlot::setMeshCode()
     * @uses ChronoApiConfirmDeliverySlot::setTransactionID()
     * @uses ChronoApiConfirmDeliverySlot::setRank()
     * @uses ChronoApiConfirmDeliverySlot::setPosition()
     * @uses ChronoApiConfirmDeliverySlot::setDateSelected()
     * @param string $callerTool
     * @param string $productType
     * @param string $codeSlot
     * @param string $meshCode
     * @param string $transactionID
     * @param string $rank
     * @param string $position
     * @param string $dateSelected
     */
    public function __construct(?string $callerTool = null, ?string $productType = null, ?string $codeSlot = null, ?string $meshCode = null, ?string $transactionID = null, ?string $rank = null, ?string $position = null, ?string $dateSelected = null)
    {
        $this
            ->setCallerTool($callerTool)
            ->setProductType($productType)
            ->setCodeSlot($codeSlot)
            ->setMeshCode($meshCode)
            ->setTransactionID($transactionID)
            ->setRank($rank)
            ->setPosition($position)
            ->setDateSelected($dateSelected);
    }
    /**
     * Get callerTool value
     * @return string|null
     */
    public function getCallerTool(): ?string
    {
        return $this->callerTool;
    }
    /**
     * Set callerTool value
     * @param string $callerTool
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot
     */
    public function setCallerTool(?string $callerTool = null): self
    {
        // validation for constraint: string
        if (!is_null($callerTool) && !is_string($callerTool)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callerTool, true), gettype($callerTool)), __LINE__);
        }
        $this->callerTool = $callerTool;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get codeSlot value
     * @return string|null
     */
    public function getCodeSlot(): ?string
    {
        return $this->codeSlot;
    }
    /**
     * Set codeSlot value
     * @param string $codeSlot
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot
     */
    public function setCodeSlot(?string $codeSlot = null): self
    {
        // validation for constraint: string
        if (!is_null($codeSlot) && !is_string($codeSlot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeSlot, true), gettype($codeSlot)), __LINE__);
        }
        $this->codeSlot = $codeSlot;
        
        return $this;
    }
    /**
     * Get meshCode value
     * @return string|null
     */
    public function getMeshCode(): ?string
    {
        return $this->meshCode;
    }
    /**
     * Set meshCode value
     * @param string $meshCode
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot
     */
    public function setMeshCode(?string $meshCode = null): self
    {
        // validation for constraint: string
        if (!is_null($meshCode) && !is_string($meshCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meshCode, true), gettype($meshCode)), __LINE__);
        }
        $this->meshCode = $meshCode;
        
        return $this;
    }
    /**
     * Get transactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->transactionID;
    }
    /**
     * Set transactionID value
     * @param string $transactionID
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->transactionID = $transactionID;
        
        return $this;
    }
    /**
     * Get rank value
     * @return string|null
     */
    public function getRank(): ?string
    {
        return $this->rank;
    }
    /**
     * Set rank value
     * @param string $rank
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot
     */
    public function setRank(?string $rank = null): self
    {
        // validation for constraint: string
        if (!is_null($rank) && !is_string($rank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rank, true), gettype($rank)), __LINE__);
        }
        $this->rank = $rank;
        
        return $this;
    }
    /**
     * Get position value
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param string $position
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot
     */
    public function setPosition(?string $position = null): self
    {
        // validation for constraint: string
        if (!is_null($position) && !is_string($position)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get dateSelected value
     * @return string|null
     */
    public function getDateSelected(): ?string
    {
        return $this->dateSelected;
    }
    /**
     * Set dateSelected value
     * @param string $dateSelected
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot
     */
    public function setDateSelected(?string $dateSelected = null): self
    {
        // validation for constraint: string
        if (!is_null($dateSelected) && !is_string($dateSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateSelected, true), gettype($dateSelected)), __LINE__);
        }
        $this->dateSelected = $dateSelected;
        
        return $this;
    }
}
