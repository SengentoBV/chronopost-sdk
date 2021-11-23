<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRechercherContraintesEnlevementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdResultContraintesAgenceValue|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdResultContraintesAgenceValue $return = null;
    /**
     * Constructor method for rechercherContraintesEnlevementResponse
     * @uses ChronoApiRechercherContraintesEnlevementResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdResultContraintesAgenceValue $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdResultContraintesAgenceValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdResultContraintesAgenceValue|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdResultContraintesAgenceValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdResultContraintesAgenceValue $return
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRechercherContraintesEnlevementResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdResultContraintesAgenceValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
