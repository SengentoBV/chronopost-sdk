<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnly Structs
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnly
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiShippingWithESDOnly extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modeRetour = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * Constructor method for shippingWithESDOnly
     * @uses ChronoApiShippingWithESDOnly::setEsdValue()
     * @uses ChronoApiShippingWithESDOnly::setHeaderValue()
     * @uses ChronoApiShippingWithESDOnly::setShipperValue()
     * @uses ChronoApiShippingWithESDOnly::setCustomerValue()
     * @uses ChronoApiShippingWithESDOnly::setRecipientValue()
     * @uses ChronoApiShippingWithESDOnly::setRefValue()
     * @uses ChronoApiShippingWithESDOnly::setSkybillValue()
     * @uses ChronoApiShippingWithESDOnly::setSkybillParamsValue()
     * @uses ChronoApiShippingWithESDOnly::setPassword()
     * @uses ChronoApiShippingWithESDOnly::setModeRetour()
     * @uses ChronoApiShippingWithESDOnly::setVersion()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue $recipientValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue $refValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue $skybillValue
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue $recipientValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue $refValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue $skybillValue = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null)
    {
        $this
            ->setEsdValue($esdValue)
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setCustomerValue($customerValue)
            ->setRecipientValue($recipientValue)
            ->setRefValue($refValue)
            ->setSkybillValue($skybillValue)
            ->setSkybillParamsValue($skybillParamsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setVersion($version);
    }
    /**
     * Get esdValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue|null
     */
    public function getEsdValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setEsdValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdWithRefClientValue $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
    }
    /**
     * Get headerValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue|null
     */
    public function getHeaderValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setHeaderValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiHeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue|null
     */
    public function getShipperValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setShipperValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue|null
     */
    public function getCustomerValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setCustomerValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue|null
     */
    public function getRecipientValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue
    {
        return $this->recipientValue;
    }
    /**
     * Set recipientValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue $recipientValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setRecipientValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue|null
     */
    public function getRefValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue
    {
        return $this->refValue;
    }
    /**
     * Set refValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue $refValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setRefValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue|null
     */
    public function getSkybillValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue $skybillValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setSkybillValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillValue $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue|null
     */
    public function getSkybillParamsValue(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setSkybillParamsValue(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiSkybillParamsValue $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get modeRetour value
     * @return string|null
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }
    /**
     * Set modeRetour value
     * @param string $modeRetour
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
     */
    public function setModeRetour(?string $modeRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;
        
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
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly
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
