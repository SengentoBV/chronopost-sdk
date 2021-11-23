<?php

namespace SengentoBV\ChronopostSdk\Services;

use SengentoBV\ChronopostSdk\ChronoServiceType;
use SengentoBV\ChronopostSdk\Exceptions\ChronoArgumentOutOfRangeException;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;

class ChronoSoapServiceMap
{
    public const SERVICE_QUICK_COST_CALCULATE = "SERVICE_QUICK_COST_CALCULATE";
    public const SERVICE_QUICK_COST_QUICK = "SERVICE_QUICK_COST_QUICK";
    public const SERVICE_RELAY_POINT_GET = "SERVICE_RELAY_POINT_GET";
    public const SERVICE_RELAY_POINT_RECHERCHE = "SERVICE_RELAY_POINT_RECHERCHE";
    public const SERVICE_SHIPPING_ANNULER = "SERVICE_SHIPPING_ANNULER";
    public const SERVICE_SHIPPING_CREER = "SERVICE_SHIPPING_CREER";
    public const SERVICE_SHIPPING_FAISABILITE = "SERVICE_SHIPPING_FAISABILITE";
    public const SERVICE_SHIPPING_GET = "SERVICE_SHIPPING_GET";
    public const SERVICE_SHIPPING_RECHERCHER = "SERVICE_SHIPPING_RECHERCHER";
    public const SERVICE_SHIPPING_SHIPPING = "SERVICE_SHIPPING_SHIPPING";

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

            static::SERVICE_RELAY_POINT_GET => [
                'serviceType' => ChronoServiceType::RELAY_POINT,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\RelayPointService\Services\ChronoApiGet::class,
            ],
            static::SERVICE_RELAY_POINT_RECHERCHE => [
                'serviceType' => ChronoServiceType::RELAY_POINT,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\RelayPointService\Services\ChronoApiRecherche::class,
            ],

            static::SERVICE_SHIPPING_ANNULER => [
                'serviceType' => ChronoServiceType::SHIPPING,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiAnnuler::class,
            ],
            static::SERVICE_SHIPPING_CREER => [
                'serviceType' => ChronoServiceType::SHIPPING,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiCreer::class,
            ],
            static::SERVICE_SHIPPING_FAISABILITE => [
                'serviceType' => ChronoServiceType::SHIPPING,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiFaisabilite::class,
            ],
            static::SERVICE_SHIPPING_GET => [
                'serviceType' => ChronoServiceType::SHIPPING,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiGet::class,
            ],
            static::SERVICE_SHIPPING_RECHERCHER => [
                'serviceType' => ChronoServiceType::SHIPPING,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiRechercher::class,
            ],
            static::SERVICE_SHIPPING_SHIPPING => [
                'serviceType' => ChronoServiceType::SHIPPING,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiShipping::class,
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
        $service = strtoupper($service);
        $mappings = static::all();

        if (isset($mappings[$service])) {
            return $mappings[$service];
        }

        throw new ChronoArgumentOutOfRangeException('service', 'Invalid service type.', $service);
    }
}