<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointChronopostAvecCoord Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiPointChronopostAvecCoord extends ChronoApiPointChronopost
{
    /**
     * The coordGeoLatitude
     * @var float|null
     */
    protected ?float $coordGeoLatitude = null;
    /**
     * The coordGeoLongitude
     * @var float|null
     */
    protected ?float $coordGeoLongitude = null;
    /**
     * Constructor method for pointChronopostAvecCoord
     * @uses ChronoApiPointChronopostAvecCoord::setCoordGeoLatitude()
     * @uses ChronoApiPointChronopostAvecCoord::setCoordGeoLongitude()
     * @param float $coordGeoLatitude
     * @param float $coordGeoLongitude
     */
    public function __construct(?float $coordGeoLatitude = null, ?float $coordGeoLongitude = null)
    {
        $this
            ->setCoordGeoLatitude($coordGeoLatitude)
            ->setCoordGeoLongitude($coordGeoLongitude);
    }
    /**
     * Get coordGeoLatitude value
     * @return float|null
     */
    public function getCoordGeoLatitude(): ?float
    {
        return $this->coordGeoLatitude;
    }
    /**
     * Set coordGeoLatitude value
     * @param float $coordGeoLatitude
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopostAvecCoord
     */
    public function setCoordGeoLatitude(?float $coordGeoLatitude = null): self
    {
        // validation for constraint: float
        if (!is_null($coordGeoLatitude) && !(is_float($coordGeoLatitude) || is_numeric($coordGeoLatitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($coordGeoLatitude, true), gettype($coordGeoLatitude)), __LINE__);
        }
        $this->coordGeoLatitude = $coordGeoLatitude;
        
        return $this;
    }
    /**
     * Get coordGeoLongitude value
     * @return float|null
     */
    public function getCoordGeoLongitude(): ?float
    {
        return $this->coordGeoLongitude;
    }
    /**
     * Set coordGeoLongitude value
     * @param float $coordGeoLongitude
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopostAvecCoord
     */
    public function setCoordGeoLongitude(?float $coordGeoLongitude = null): self
    {
        // validation for constraint: float
        if (!is_null($coordGeoLongitude) && !(is_float($coordGeoLongitude) || is_numeric($coordGeoLongitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($coordGeoLongitude, true), gettype($coordGeoLongitude)), __LINE__);
        }
        $this->coordGeoLongitude = $coordGeoLongitude;
        
        return $this;
    }
}
