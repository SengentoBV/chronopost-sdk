<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiCancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancelSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiCancelSkybill $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiCancelSkybillResponse|bool
     */
    public function cancelSkybill(\SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiCancelSkybill $parameters)
    {
        try {
            $this->setResult($resultCancelSkybill = $this->getSoapClient()->__soapCall('cancelSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiCancelSkybillResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
