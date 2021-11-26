<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tournee Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiTournee extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The localise
     * @var bool|null
     */
    protected ?bool $localise = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for tournee
     * @uses ChronoApiTournee::setCode()
     * @uses ChronoApiTournee::setLocalise()
     * @uses ChronoApiTournee::setType()
     * @param string $code
     * @param bool $localise
     * @param string $type
     */
    public function __construct(?string $code = null, ?bool $localise = null, ?string $type = null)
    {
        $this
            ->setCode($code)
            ->setLocalise($localise)
            ->setType($type);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get localise value
     * @return bool|null
     */
    public function getLocalise(): ?bool
    {
        return $this->localise;
    }
    /**
     * Set localise value
     * @param bool $localise
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee
     */
    public function setLocalise(?bool $localise = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localise) && !is_bool($localise)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localise, true), gettype($localise)), __LINE__);
        }
        $this->localise = $localise;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTournee
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
