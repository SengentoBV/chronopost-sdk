<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingInfo Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiShippingInfo extends AbstractStructBase
{
    /**
     * The asCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $asCode = null;
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
     * The groupingPriorityLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $groupingPriorityLabel = null;
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
     * Constructor method for shippingInfo
     * @uses ChronoApiShippingInfo::setAsCode()
     * @uses ChronoApiShippingInfo::setCodeService()
     * @uses ChronoApiShippingInfo::setDestinationDepot()
     * @uses ChronoApiShippingInfo::setGroupingPriorityLabel()
     * @uses ChronoApiShippingInfo::setServiceMark()
     * @uses ChronoApiShippingInfo::setServiceName()
     * @uses ChronoApiShippingInfo::setSignaletiqueProduit()
     * @uses ChronoApiShippingInfo::setDSort()
     * @uses ChronoApiShippingInfo::setOSort()
     * @param string $asCode
     * @param string $codeService
     * @param string $destinationDepot
     * @param string $groupingPriorityLabel
     * @param string $serviceMark
     * @param string $serviceName
     * @param string $signaletiqueProduit
     * @param string $dSort
     * @param string $oSort
     */
    public function __construct(?string $asCode = null, ?string $codeService = null, ?string $destinationDepot = null, ?string $groupingPriorityLabel = null, ?string $serviceMark = null, ?string $serviceName = null, ?string $signaletiqueProduit = null, ?string $dSort = null, ?string $oSort = null)
    {
        $this
            ->setAsCode($asCode)
            ->setCodeService($codeService)
            ->setDestinationDepot($destinationDepot)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setServiceMark($serviceMark)
            ->setServiceName($serviceName)
            ->setSignaletiqueProduit($signaletiqueProduit)
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
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
