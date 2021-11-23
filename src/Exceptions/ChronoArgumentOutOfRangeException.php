<?php

namespace SengentoBV\ChronopostSdk\Exceptions;

use Throwable;

class ChronoArgumentOutOfRangeException extends ChronoArgumentException
{
    /**
     * @var mixed|null
     */
    private $actualValue;

    /**
     * Class constructor.
     * @param string $paramName
     * @param string $message
     * @param mixed|null $actualValue
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $paramName = "", string $message = "", $actualValue = null, $code = 0, Throwable $previous = null)
    {
        $message = ($message === null || $message === '') ? "Value does not fall within the expected range." : $message;

        parent::__construct($paramName, $message, $code, $previous);

        $this->actualValue = $actualValue;
    }

    public function getActualValue()
    {
        return $this->actualValue;
    }

    public function __toString() : string
    {
        $message = parent::__toString();

        $actualValue = $this->getActualValue();

        return $actualValue === null ? $message : $message . PHP_EOL . 'Actual value was ' . $actualValue;
    }
}
