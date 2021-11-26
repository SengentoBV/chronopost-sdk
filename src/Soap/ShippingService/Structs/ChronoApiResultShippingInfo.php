<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultShippingInfo Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultShippingInfo extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError $error = null;
    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo $shippingInfo = null;
    /**
     * Constructor method for resultShippingInfo
     * @uses ChronoApiResultShippingInfo::setError()
     * @uses ChronoApiResultShippingInfo::setShippingInfo()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError $error
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo $shippingInfo
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError $error = null, ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo);
    }
    /**
     * Get error value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError|null
     */
    public function getError(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError $error
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo
     */
    public function setError(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiError $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get shippingInfo value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo|null
     */
    public function getShippingInfo(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo
    {
        return $this->shippingInfo;
    }
    /**
     * Set shippingInfo value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo $shippingInfo
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo
     */
    public function setShippingInfo(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingInfo $shippingInfo = null): self
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
}
