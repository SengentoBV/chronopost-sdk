<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SengentoBV\ChronopostSdk\ChronoApiClient;
use SengentoBV\ChronopostSdk\ChronoFaultHandler;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoQuickCostServiceClient;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoRelayPointServiceClient;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoShippingServiceClient;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoSlotGeoServiceClient;
use SengentoBV\ChronopostSdk\ServiceClients\ChronoTrackingServiceClient;
use SengentoBV\ChronopostSdk\Services\ChronoSoapServiceMap;

class ChronoApiClientTest extends TestCase
{
    private ChronoApiClient $apiClient;

    public function setUp(): void
    {
        $this->apiClient = new ChronoApiClient();
    }

    public function testGetSoapServiceClientThrowsOnInvalidSoapServiceType()
    {
        $this->expectException(\SengentoBV\ChronopostSdk\Exceptions\ChronoArgumentOutOfRangeException::class);
        $this->expectExceptionMessage('Invalid service type.');

        $this->apiClient->getSoapServiceClient('invalid');
    }

    /**
     * @dataProvider getSoapServiceClientForValidSoapServiceTypeReturnsCorrectClientProvider
     */
    public function testGetSoapServiceClientForValidSoapServiceTypeReturnsCorrectClient($soapServiceType, $soapServiceTypeClass)
    {
        $soapServiceInstance = $this->apiClient->getSoapServiceClient($soapServiceType);

        $this->assertInstanceOf($soapServiceTypeClass, $soapServiceInstance);
    }

    /**
     * @dataProvider getServiceClientFunctionsReturnsCorrectClientProvider
     */
    public function testGetServiceClientFunctionsReturnsCorrectClient($functionName, $serviceClientType)
    {
        $clientInstance = $this->apiClient->$functionName();

        $this->assertInstanceOf($serviceClientType, $clientInstance);
    }

    public function testDefaultFaultHandlerMatchesExpected()
    {
        $this->assertEquals(ChronoFaultHandler::class, get_class($this->apiClient->getFaultHandler()));
    }

    public function getSoapServiceClientForValidSoapServiceTypeReturnsCorrectClientProvider(): array
    {
        return [
            [ChronoSoapServiceMap::SERVICE_QUICK_COST_CALCULATE, \SengentoBV\ChronopostSdk\Soap\QuickCostService\Services\ChronoApiCalculate::class],
            [ChronoSoapServiceMap::SERVICE_QUICK_COST_QUICK, \SengentoBV\ChronopostSdk\Soap\QuickCostService\Services\ChronoApiQuick::class],

            [ChronoSoapServiceMap::SERVICE_SLOT_GEO_CONFIRM, \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiConfirm::class],
            [ChronoSoapServiceMap::SERVICE_SLOT_GEO_GET, \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiGet::class],
            [ChronoSoapServiceMap::SERVICE_SLOT_GEO_SEARCH, \SengentoBV\ChronopostSdk\Soap\SlotGeoService\Services\ChronoApiSearch::class],

            [ChronoSoapServiceMap::SERVICE_TRACKING_CANCEL, \SengentoBV\ChronopostSdk\Soap\TrackingService\Services\ChronoApiCancel::class],
            [ChronoSoapServiceMap::SERVICE_TRACKING_SEARCH, \SengentoBV\ChronopostSdk\Soap\TrackingService\Services\ChronoApiSearch::class],
            [ChronoSoapServiceMap::SERVICE_TRACKING_TRACK, \SengentoBV\ChronopostSdk\Soap\TrackingService\Services\ChronoApiTrack::class],

            [ChronoSoapServiceMap::SERVICE_RELAY_POINT_GET, \SengentoBV\ChronopostSdk\Soap\RelayPointService\Services\ChronoApiGet::class],
            [ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE, \SengentoBV\ChronopostSdk\Soap\RelayPointService\Services\ChronoApiRecherche::class],

            [ChronoSoapServiceMap::SERVICE_SHIPPING_ANNULER, \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiAnnuler::class],
            [ChronoSoapServiceMap::SERVICE_SHIPPING_CREER, \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiCreer::class],
            [ChronoSoapServiceMap::SERVICE_SHIPPING_FAISABILITE, \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiFaisabilite::class],
            [ChronoSoapServiceMap::SERVICE_SHIPPING_GET, \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiGet::class],
            [ChronoSoapServiceMap::SERVICE_SHIPPING_RECHERCHER, \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiRechercher::class],
            [ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING, \SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiShipping::class],

        ];
    }

    public function getServiceClientFunctionsReturnsCorrectClientProvider(): array
    {
        return [
            ['getShippingService', ChronoShippingServiceClient::class],
            ['getQuickCostService', ChronoQuickCostServiceClient::class],
            ['getRelayPointService', ChronoRelayPointServiceClient::class],
            ['getSlotGeoService', ChronoSlotGeoServiceClient::class],
            ['getTrackingService', ChronoTrackingServiceClient::class],
        ];
    }
}