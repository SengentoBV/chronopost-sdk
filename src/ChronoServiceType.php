<?php

namespace SengentoBV\ChronopostSdk;

use SengentoBV\ChronopostSdk\Exceptions\ChronoArgumentOutOfRangeException;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;

class ChronoServiceType
{
    public const TRACKING = 'Tracking';
    public const QUICK_COST = 'QuickCost';
    public const RELAY_POINT = 'RelayPoint';
    public const SLOT_GEO = 'SlotGeo';
    public const SHIPPING = 'Shipping';

    /**
     * Check if the given string is a valid service type identifier. Case-sensitive.
     * @param string $serviceType Service type identifier.
     * @return bool
     */
    public static function isValid(string $serviceType): bool
    {
        return in_array($serviceType, [
            static::TRACKING,
            static::QUICK_COST,
            static::RELAY_POINT,
            static::SLOT_GEO,
            static::SHIPPING,
        ]);
    }

    /**
     * Check if the given string is a valid service type identifier. Case-sensitive.
     * @param string $serviceType Service type identifier.
     * @throws ChronoArgumentOutOfRangeException
     */
    public static function requireValid(string $serviceType)
    {
        if (!static::isValid($serviceType)) {
            throw new ChronoArgumentOutOfRangeException('serviceType', 'Invalid service type.', $serviceType);
        }
    }
}