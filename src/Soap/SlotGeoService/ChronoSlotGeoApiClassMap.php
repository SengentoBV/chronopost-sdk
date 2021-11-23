<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\SlotGeoService;

/**
 * Class which returns the class map definition
 * @package ChronoApi
 */
class ChronoSlotGeoApiClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'searchDeliverySlot' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiSearchDeliverySlot',
            'searchDeliverySlotResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiSearchDeliverySlotResponse',
            'deliverySlotResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiDeliverySlotResponse',
            'wsResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiWsResponse',
            'slot' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiSlot',
            'confirmDeliverySlotV2' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiConfirmDeliverySlotV2',
            'confirmDeliverySlotV2Response' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiConfirmDeliverySlotV2Response',
            'serviceResponseV2' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiServiceResponseV2',
            'productServiceV2' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiProductServiceV2',
            'productService' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiProductService',
            'getAdresseGeocodage' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiGetAdresseGeocodage',
            'getAdresseGeocodageResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiGetAdresseGeocodageResponse',
            'geocodageResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiGeocodageResponse',
            'confirmDeliverySlot' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiConfirmDeliverySlot',
            'confirmDeliverySlotResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiConfirmDeliverySlotResponse',
            'serviceResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\SlotGeoService\\Structs\\ChronoApiServiceResponse',
        ];
    }
}
