<?php

namespace SengentoBV\ChronopostSdk\Exceptions;

class ChronoSoapFaultException extends ChronoException
{
    /**
     * Get the source SoapFault instance.
     *
     * @return \SoapFault
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function getSource() : \SoapFault
    {
        return $this->getPrevious();
    }

    public function __construct(\SoapFault $soapFault)
    {
        $message = null;
        $code = null;

        // Special case for error responses
        if (isset($soapFault->faultcode) && isset($soapFault->faultstring)) {

            if ($soapFault->faultcode === 'INTERNAL_AUTHENTICATION_NOT_SET') {
                $message = 'Authentication not set.';
                $code = -1;
            } else {
                $message = $soapFault->faultstring;
                $code = strpos($soapFault->faultcode , 'CHRONO_ERR' ) === 0 ? intval(substr($soapFault->faultcode, strlen('CHRONO_ERR'))) : 0;
            }
        }

        parent::__construct($message, $code, $soapFault);
    }
}