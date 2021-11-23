<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiAnnulerEnlevementsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement $return = null;
    /**
     * Constructor method for annulerEnlevementsResponse
     * @uses ChronoApiAnnulerEnlevementsResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevementsResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
