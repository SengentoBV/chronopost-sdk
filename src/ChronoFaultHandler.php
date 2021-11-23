<?php

namespace SengentoBV\ChronopostSdk;

use SengentoBV\ChronopostSdk\ServiceClients\AbstractChronoServiceClient;
use SoapFault;

class ChronoFaultHandler
{
    /**
     * Attempt to recover from the thrown fault.
     *
     * You can throw your own fault if needed (if not castable to DpdBeException, your exception will be wrapped)
     *
     * @param AbstractChronoServiceClient $serviceClient
     * @param string $function Function name
     * @param SoapFault $fault Soap fault thrown.
     * @return bool true to indicate a recovery was attempted and the call should be retried; false to throw the original exception.
     */
    public function tryRecover(AbstractChronoServiceClient $serviceClient, string $function, SoapFault $fault) : bool
    {
        return false;
    }
}