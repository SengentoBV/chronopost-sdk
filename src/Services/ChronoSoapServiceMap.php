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

    public const SERVICE_SLOT_GEO_CONFIRM = "SERVICE_SLOT_GEO_CONFIRM";
    public const SERVICE_SLOT_GEO_GET = "SERVICE_SLOT_GEO_GET";
    public const SERVICE_SLOT_GEO_SEARCH = "SERVICE_SLOT_GEO_SEARCH";

    public const SERVICE_TRACKING_CANCEL = "SERVICE_TRACKING_CANCEL";
    public const SERVICE_TRACKING_SEARCH = "SERVICE_TRACKING_SEARCH";
    public const SERVICE_TRACKING_TRACK = "SERVICE_TRACKING_TRACK";

    final public static function all(): array
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

            static::SERVICE_SLOT_GEO_CONFIRM => [
                'serviceType' => ChronoServiceType::SLOT_GEO,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiConfirm::class,
            ],
            static::SERVICE_SLOT_GEO_GET => [
                'serviceType' => ChronoServiceType::SLOT_GEO,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiGet::class,
            ],
            static::SERVICE_SLOT_GEO_SEARCH => [
                'serviceType' => ChronoServiceType::SLOT_GEO,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiSearch::class,
            ],

            static::SERVICE_TRACKING_CANCEL => [
                'serviceType' => ChronoServiceType::TRACKING,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\TrackingService\Services\ChronoApiCancel::class,
            ],
            static::SERVICE_TRACKING_SEARCH => [
                'serviceType' => ChronoServiceType::TRACKING,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\TrackingService\Services\ChronoApiSearch::class,
            ],
            static::SERVICE_TRACKING_TRACK => [
                'serviceType' => ChronoServiceType::TRACKING,
                'serviceClass' => \SengentoBV\ChronopostSdk\Soap\TrackingService\Services\ChronoApiTrack::class,
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
    final public static function get(string $service): array
    {
        $service = strtoupper($service);
        $mappings = static::all();

        if (isset($mappings[$service])) {
            return $mappings[$service];
        }

        throw new ChronoArgumentOutOfRangeException('service', 'Invalid service type.', $service);
    }
}