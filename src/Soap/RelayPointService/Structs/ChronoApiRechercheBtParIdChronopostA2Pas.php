<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheBtParIdChronopostA2Pas Structs
 * Meta information extracted from the WSDL
 * - type: tns:rechercheBtParIdChronopostA2Pas
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiRechercheBtParIdChronopostA2Pas extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * Constructor method for rechercheBtParIdChronopostA2Pas
     * @uses ChronoApiRechercheBtParIdChronopostA2Pas::setId()
     * @param string $id
     */
    public function __construct(?string $id = null)
    {
        $this
            ->setId($id);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParIdChronopostA2Pas
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
}
