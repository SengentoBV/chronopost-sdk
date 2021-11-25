<?php

namespace SengentoBV\ChronopostSdk\ServiceClients;

use SengentoBV\ChronopostSdk\ChronoApiClient;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;
use SengentoBV\ChronopostSdk\Services\ChronoSoapServiceMap;
use SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlot;
use SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiConfirmDeliverySlotV2;
use SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiDeliverySlotResponse;
use SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGeocodageResponse;
use SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiGetAdresseGeocodage;
use SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiSearchDeliverySlot;
use SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponse;
use SengentoBV\ChronopostSdk\Soap\SlotGeoService\Structs\ChronoApiServiceResponseV2;

class ChronoSlotGeoServiceClient extends AbstractChronoServiceClient
{
    public function __construct(ChronoApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    //<editor-fold desc="Slot/Geo - Confirm API functions">
    /**
     * @param ChronoApiConfirmDeliverySlotV2 $input
     * @return ChronoApiServiceResponseV2
     * @throws ChronoException
     */
    public function confirmDeliverySlotV2(ChronoApiConfirmDeliverySlotV2 $input): ChronoApiServiceResponseV2
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SLOT_GEO_CONFIRM);

        /** See {@see ChronoApiConfirm::confirmDeliverySlotV2()} and {@see ChronoApiConfirmDeliverySlotV2Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'confirmDeliverySlotV2', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiConfirmDeliverySlot $input
     * @return ChronoApiServiceResponse
     * @throws ChronoException
     */
    public function confirmDeliverySlot(ChronoApiConfirmDeliverySlot $input): ChronoApiServiceResponse
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SLOT_GEO_CONFIRM);

        /** See {@see ChronoApiConfirm::confirmDeliverySlot()} and {@see ChronoApiConfirmDeliverySlotResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'confirmDeliverySlot', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Slot/Geo - Get API functions">
    /**
     * @param ChronoApiGetAdresseGeocodage $input
     * @return ChronoApiGeocodageResponse
     * @throws ChronoException
     */
    public function getAdresseGeocodage(ChronoApiGetAdresseGeocodage $input): ChronoApiGeocodageResponse
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SLOT_GEO_GET);

        /** See {@see ChronoApiGet::getAdresseGeocodage()} and {@see ChronoApiGetAdresseGeocodageResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getAdresseGeocodage', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Slot/Geo - Search API functions">
    /**
     * @param ChronoApiSearchDeliverySlot $input
     * @return ChronoApiDeliverySlotResponse
     * @throws ChronoException
     */
    public function searchDeliverySlot(ChronoApiSearchDeliverySlot $input): ChronoApiDeliverySlotResponse
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SLOT_GEO_SEARCH);

        /** See {@see ChronoApiSearch::searchDeliverySlot()} and {@see ChronoApiSearchDeliverySlotResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'searchDeliverySlot', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>
}