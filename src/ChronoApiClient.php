<?php

namespace SengentoBV\ChronopostSdk;

use SengentoBV\ChronopostSdk\Exceptions\ChronoArgumentOutOfRangeException;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoQuickCostServiceClient;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoRelayPointServiceClient;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoShippingServiceClient;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoSlotGeoServiceClient;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoTrackingServiceClient;
use SengentoBV\ChronopostSdk\Services\ChronoSoapServiceMap;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\ChronoQuickCostApiClassMap;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\ChronoRelayPointApiClassMap;
use SengentoBV\ChronopostSdk\Soap\ShippingService\ChronoShippingApiClassMap;
use SengentoBV\ChronopostSdk\Soap\SlotGeoService\ChronoSlotGeoApiClassMap;
use SengentoBV\ChronopostSdk\Soap\TrackingService\ChronoTrackingApiClassMap;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\PackageBase\SoapClientInterface;

class ChronoApiClient
{
    /**
     * Option key to define WSDL service location override
     * @var string
     */
    const WSDL_CLIENT_SERVICE_URL = 'wsdl_client_service_url';

    private array $wsdlOptions;

    private ChronoFaultHandler $faultHandler;

    private ?ChronoAuthenticationInterface $authentication;

    private array $soapServiceClients = [];

    /**
     * Stores the default set of WSDL options, per service type (see: {@see DpdBeShipperServiceType})
     * @var ?array
     */
    private ?array $defaultWsdlOptions = null;

    /**
     * Class constructor.
     * @param array|null $wsdlOptions Optional WSDL options. Array of array.
     *                                If used, the key must be one of the constants found in {@see ChronoServiceType}
     *                                Throws if any of the indexes is an invalid service type, or the value is not an array
     * @param ?ChronoAuthenticationInterface $authentication Optional authentication data to use to perform protected calls.
     *                                                      [default: null]
     * @param ?ChronoFaultHandler $faultHandler Optional fault handler that is invoked when an API calls fails that can trigger a retry.
     *                                         [default: dummy handler]
     * @throws ChronoException Throws if the any of the keys of the $wsdlOptions array is not a valid service type.
     */
    public function __construct(?ChronoAuthenticationInterface $authentication = null,
                                ?ChronoFaultHandler            $faultHandler = null,
                                array                          $wsdlOptions = null)
    {
        if ($wsdlOptions !== null && count($wsdlOptions) > 0) {
            foreach ($wsdlOptions as $serviceType => $wsdlOptionsArray) {
                ChronoServiceType::requireValid($serviceType);

                if (!is_array($wsdlOptionsArray)) {
                    throw new ChronoException('WSDL options value for "' . $serviceType . '" is not an array.');
                }
            }
        }

        $this->wsdlOptions = $wsdlOptions ?? [];
        $this->authentication = $authentication;
        $this->faultHandler = $faultHandler ?? new ChronoFaultHandler();
    }

    /**
     * Change the authentication info used to authenticate protected API calls.
     * @param ?ChronoAuthenticationInterface $authentication Authentication information, or null to unset it.
     * @return ChronoAuthenticationInterface
     */
    public function setAuthentication(?ChronoAuthenticationInterface $authentication): ChronoAuthenticationInterface
    {
        $this->authentication = $authentication;

        return $this;
    }

    /**
     * Get the authentication info used to authenticate protected API calls.
     *
     * @return ChronoAuthenticationInterface|null
     */
    public function getAuthentication(): ?ChronoAuthenticationInterface
    {
        return $this->authentication;
    }

    public function getDefaultWsdlOptions(): array
    {
        if ($this->defaultWsdlOptions === null) {
            $this->defaultWsdlOptions = [
                ChronoServiceType::QUICK_COST => [
                    SoapClientInterface::WSDL_CLASSMAP => ChronoQuickCostApiClassMap::get(),
                    SoapClientInterface::WSDL_TRACE => false,
                    SoapClientInterface::WSDL_URL => 'https://ws.chronopost.fr/quickcost-cxf/QuickcostServiceWS?wsdl',
                    static::WSDL_CLIENT_SERVICE_URL => 'https://ws.chronopost.fr/quickcost-cxf/QuickcostServiceWS',
                ],
                ChronoServiceType::RELAY_POINT => [
                    SoapClientInterface::WSDL_CLASSMAP => ChronoRelayPointApiClassMap::get(),
                    SoapClientInterface::WSDL_TRACE => false,
                    SoapClientInterface::WSDL_URL => 'https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl',
                    static::WSDL_CLIENT_SERVICE_URL => 'https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS',
                ],
                ChronoServiceType::SLOT_GEO => [
                    SoapClientInterface::WSDL_CLASSMAP => ChronoSlotGeoApiClassMap::get(),
                    SoapClientInterface::WSDL_TRACE => false,
                    SoapClientInterface::WSDL_URL => 'https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS?wsdl',
                    static::WSDL_CLIENT_SERVICE_URL => 'https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS',
                ],
                ChronoServiceType::SHIPPING => [
                    SoapClientInterface::WSDL_CLASSMAP => ChronoShippingApiClassMap::get(),
                    SoapClientInterface::WSDL_TRACE => false,
                    SoapClientInterface::WSDL_URL => 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl',
                    static::WSDL_CLIENT_SERVICE_URL => 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS',
                ],
                ChronoServiceType::TRACKING => [
                    SoapClientInterface::WSDL_CLASSMAP => ChronoTrackingApiClassMap::get(),
                    SoapClientInterface::WSDL_URL => 'https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl',
                    static::WSDL_CLIENT_SERVICE_URL => 'https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS',
                ],
            ];
        }

        return $this->defaultWsdlOptions;
    }

    /**
     * Get the WSDL options for the given service type after having applied the optional overrides.
     * @param string $serviceType Valid service type. See {@see DpdBeShipperServiceType}
     * @return array
     * @throws Exceptions\ChronoArgumentOutOfRangeException Throws if the service type isn't valid.
     */
    public function getWsdlOptions(string $serviceType): array
    {
        ChronoServiceType::requireValid($serviceType);

        $defaultWsdlOptions = $this->getDefaultWsdlOptions();

        $wsdlOptions = $defaultWsdlOptions[$serviceType];

        foreach ($this->wsdlOptions as $key => $value) {
            $wsdlOptions[$key] = $value;
        }

        return $wsdlOptions;
    }

    /**
     * Set the WSDL option overrides for a specific service type.
     *
     * @param string $serviceType Valid service type. See {@see DpdBeShipperServiceType}
     * @param array $wsdlOptions WSDL option overrides.
     * @param bool $replace true (default) to replace all overrides for the given service type; false to merge them instead.
     * @throws Exceptions\ChronoException Throws if the service type isn't valid.
     */
    public function setWsdlOptions(string $serviceType, array $wsdlOptions, bool $replace = true): ChronoApiClient
    {
        ChronoServiceType::requireValid($serviceType);

        if ($replace || !isset($this->wsdlOptions[$serviceType]) || count($this->wsdlOptions[$serviceType]) === 0) {
            $this->wsdlOptions[$serviceType] = $wsdlOptions;
        } else {
            foreach ($wsdlOptions as $wsdlOptionKey => $wsdlOptionValue) {
                $this->wsdlOptions[$serviceType][$wsdlOptionKey] = $wsdlOptionValue;
            }
        }

        return $this;
    }

    /**
     * @param string $soapServiceType
     * @return AbstractSoapClientBase
     * @throws ChronoException
     */
    public function getSoapServiceClient(string $soapServiceType): AbstractSoapClientBase
    {
        $soapServiceType = strtoupper($soapServiceType);

        if (isset($this->soapServiceClients[$soapServiceType])) {

            return $this->soapServiceClients[$soapServiceType];
        }

        $serviceMapping = ChronoSoapServiceMap::get($soapServiceType);
        $serviceClass = $serviceMapping['serviceClass'];
        $serviceType = $serviceMapping['serviceType'];

        $wsdlOptions = $this->getWsdlOptions($serviceType);

        /** @var AbstractSoapClientBase $serviceInstance */
        $serviceInstance = new $serviceClass($wsdlOptions);

        $wsdlServiceUrlOption = static::WSDL_CLIENT_SERVICE_URL;

        // Override the service url if needed
        if (isset($wsdlOptions[$wsdlServiceUrlOption])) {
            $serviceInstance->getSoapClient()->__setLocation($wsdlOptions[$wsdlServiceUrlOption]);
        }

        // Cache the instance
        $this->soapServiceClients[$soapServiceType] = $serviceInstance;

        return $serviceInstance;
    }

    /**
     * Get a new instance of the quick cost service client.
     * @return ChronoQuickCostServiceClient
     */
    public function getQuickCostService(): ChronoQuickCostServiceClient
    {
        return new ChronoQuickCostServiceClient($this);
    }

    /**
     * Get a new instance of the shipping service client.
     * @return ChronoShippingServiceClient
     */
    public function getShippingService(): ChronoShippingServiceClient
    {
        return new ChronoShippingServiceClient($this);
    }

    /**
     * Get a new instance of the slot/geo service client.
     * @return ChronoSlotGeoServiceClient
     */
    public function getSlotGeoService(): ChronoSlotGeoServiceClient
    {
        return new ChronoSlotGeoServiceClient($this);
    }

    /**
     * Get a new instance of the tracking service client.
     * @return ChronoTrackingServiceClient
     */
    public function getTrackingService(): ChronoTrackingServiceClient
    {
        return new ChronoTrackingServiceClient($this);
    }

    /**
     * Get a new instance of the relay point service client.
     * @return ChronoRelayPointServiceClient
     */
    public function getRelayPointService(): ChronoRelayPointServiceClient
    {
        return new ChronoRelayPointServiceClient($this);
    }

    /**
     * @return ChronoFaultHandler
     */
    public function getFaultHandler(): ChronoFaultHandler
    {
        return $this->faultHandler;
    }

    /**
     * @param ChronoFaultHandler $faultHandler
     * @return ChronoApiClient
     */
    public function setFaultHandler(ChronoFaultHandler $faultHandler): ChronoApiClient
    {
        $this->faultHandler = $faultHandler;

        return $this;
    }
}