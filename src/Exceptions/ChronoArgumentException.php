<?php

namespace SengentoBV\ChronopostSdk\Exceptions;

use Throwable;
use UnexpectedValueException;

class ChronoArgumentException extends ChronoException
{
    private string $paramName;

    public function __construct(string $paramName = "", $message = "", $code = 0, Throwable $previous = null)
    {
        $message = ($message === null || $message === '') ? "An invalid argument was specified." : $message;

        parent::__construct($message, $code, $previous);

        $this->paramName = $paramName;
    }

    public function paramName() : string
    {
        return $this->paramName;
    }

    public function __toString(): string
    {
        $message = $this->getMessage();
        $paramName = $this->paramName();

        return ($paramName === null || strlen($paramName) === 0) ? $message : $message . PHP_EOL . 'Parameter name: ' . $paramName;
    }
}
