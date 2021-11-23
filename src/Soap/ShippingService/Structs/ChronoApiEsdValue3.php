<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdValue3 Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiEsdValue3 extends ChronoApiEsdWithRefClientValue
{
    /**
     * The codeDepotColReq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeDepotColReq = null;
    /**
     * The numColReq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numColReq = null;
    /**
     * Constructor method for esdValue3
     * @uses ChronoApiEsdValue3::setCodeDepotColReq()
     * @uses ChronoApiEsdValue3::setNumColReq()
     * @param string $codeDepotColReq
     * @param string $numColReq
     */
    public function __construct(?string $codeDepotColReq = null, ?string $numColReq = null)
    {
        $this
            ->setCodeDepotColReq($codeDepotColReq)
            ->setNumColReq($numColReq);
    }
    /**
     * Get codeDepotColReq value
     * @return string|null
     */
    public function getCodeDepotColReq(): ?string
    {
        return $this->codeDepotColReq;
    }
    /**
     * Set codeDepotColReq value
     * @param string $codeDepotColReq
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue3
     */
    public function setCodeDepotColReq(?string $codeDepotColReq = null): self
    {
        // validation for constraint: string
        if (!is_null($codeDepotColReq) && !is_string($codeDepotColReq)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeDepotColReq, true), gettype($codeDepotColReq)), __LINE__);
        }
        $this->codeDepotColReq = $codeDepotColReq;
        
        return $this;
    }
    /**
     * Get numColReq value
     * @return string|null
     */
    public function getNumColReq(): ?string
    {
        return $this->numColReq;
    }
    /**
     * Set numColReq value
     * @param string $numColReq
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdValue3
     */
    public function setNumColReq(?string $numColReq = null): self
    {
        // validation for constraint: string
        if (!is_null($numColReq) && !is_string($numColReq)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numColReq, true), gettype($numColReq)), __LINE__);
        }
        $this->numColReq = $numColReq;
        
        return $this;
    }
}
