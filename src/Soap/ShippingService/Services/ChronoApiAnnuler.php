<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Annuler Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiAnnuler extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named annulerEnlevements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevements $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevementsResponse|bool
     */
    public function annulerEnlevements(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevements $parameters)
    {
        try {
            $this->setResult($resultAnnulerEnlevements = $this->getSoapClient()->__soapCall('annulerEnlevements', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnulerEnlevements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevementsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
