<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Faisabilite Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiFaisabilite extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named faisabiliteESD
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiFaisabiliteESD $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiFaisabiliteESDResponse|bool
     */
    public function faisabiliteESD(\SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiFaisabiliteESD $parameters)
    {
        try {
            $this->setResult($resultFaisabiliteESD = $this->getSoapClient()->__soapCall('faisabiliteESD', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFaisabiliteESD;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiFaisabiliteESDResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
