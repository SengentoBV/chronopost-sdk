<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsResponse Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiWsResponse extends AbstractStructBase
{
    /**
     * The code
     * @var int|null
     */
    protected ?int $code = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * Constructor method for wsResponse
     * @uses ChronoApiWsResponse::setCode()
     * @uses ChronoApiWsResponse::setMessage()
     * @param int $code
     * @param string $message
     */
    public function __construct(?int $code = null, ?string $message = null)
    {
        $this
            ->setCode($code)
            ->setMessage($message);
    }
    /**
     * Get code value
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param int $code
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiWsResponse
     */
    public function setCode(?int $code = null): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiWsResponse
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
}
