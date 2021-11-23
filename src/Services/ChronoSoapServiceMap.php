<?php

namespace SengentoBV\ChronopostSdk\Services;

use SengentoBV\ChronopostSdk\ChronoServiceType;
use SengentoBV\ChronopostSdk\Exceptions\ChronoArgumentOutOfRangeException;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;

class ChronoSoapServiceMap
{
    public const SERVICE_QUICK_COST_CALCULATE = "quick_cost_calculate";
    public const SERVICE_QUICK_COST_QUICK = "quick_cost_quick";

    final public static function all() : array
    {
        return [
            static::SERVICE_QUICK_COST_CALCULATE => [
                'serviceType' => ChronoServiceType::QUICK_COST,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\QuickCostService\Services\ChronoApiCalculate::class,
            ],
            static::SERVICE_QUICK_COST_QUICK => [
                'serviceType' => ChronoServiceType::QUICK_COST,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\QuickCostService\Services\ChronoApiQuick::class,
            ],
        ];
    }

    /**
     * @param string $service
     * @return array
     * @throws ChronoException
     */
    final public static function get(string $service) : array
    {
        $service = strtolower($service);
        $mappings = static::all();

        if (isset($mappings[$service])) {
            return $mappings[$service];
        }

        throw new ChronoArgumentOutOfRangeException('service', 'Invalid service type.', $service);
    }
}