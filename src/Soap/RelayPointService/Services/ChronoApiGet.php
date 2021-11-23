<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiGet extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getAllChronopostAgences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiGetAllChronopostAgences $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiGetAllChronopostAgencesResponse|bool
     */
    public function getAllChronopostAgences(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiGetAllChronopostAgences $parameters)
    {
        try {
            $this->setResult($resultGetAllChronopostAgences = $this->getSoapClient()->__soapCall('getAllChronopostAgences', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllChronopostAgences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiGetAllChronopostAgencesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
