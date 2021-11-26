<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rechercher Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiRechercher extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named rechercherContraintesEnlevement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRechercherContraintesEnlevement $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRechercherContraintesEnlevementResponse|bool
     */
    public function rechercherContraintesEnlevement(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRechercherContraintesEnlevement $parameters)
    {
        try {
            $this->setResult($resultRechercherContraintesEnlevement = $this->getSoapClient()->__soapCall('rechercherContraintesEnlevement', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercherContraintesEnlevement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRechercherContraintesEnlevementResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
