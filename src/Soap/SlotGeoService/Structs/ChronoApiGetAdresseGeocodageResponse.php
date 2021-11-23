<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdresseGeocodageResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:getAdresseGeocodageResponse
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiGetAdresseGeocodageResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGeocodageResponse|null
     */
    protected ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGeocodageResponse $return = null;
    /**
     * Constructor method for getAdresseGeocodageResponse
     * @uses ChronoApiGetAdresseGeocodageResponse::setReturn()
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGeocodageResponse $return
     */
    public function __construct(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGeocodageResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGeocodageResponse|null
     */
    public function getReturn(): ?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGeocodageResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGeocodageResponse $return
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodageResponse
     */
    public function setReturn(?\SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGeocodageResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
