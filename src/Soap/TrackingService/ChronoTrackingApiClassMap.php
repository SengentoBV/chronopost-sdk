<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\TrackingService;

/**
 * Class which returns the class map definition
 * @package ChronoApi
 */
class ChronoTrackingApiClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'resultTrackWithSenderRef' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiResultTrackWithSenderRef',
            'listEvents' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiListEvents',
            'event' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiEvent',
            'resultTrackSearch' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiResultTrackSearch',
            'infosPOD' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiInfosPOD',
            'resultTrackSkybillV2' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiResultTrackSkybillV2',
            'listEventInfoComps' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiListEventInfoComps',
            'eventInfoComp' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiEventInfoComp',
            'infoComp' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiInfoComp',
            'resultCancelSkybill' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiResultCancelSkybill',
            'resultTrackSkybill' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiResultTrackSkybill',
            'resultSearchPOD' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiResultSearchPOD',
            'resultSearchPODWithSenderRef' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiResultSearchPODWithSenderRef',
            'parcelPOD' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiParcelPOD',
            'trackWithSenderRef' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiTrackWithSenderRef',
            'trackWithSenderRefResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiTrackWithSenderRefResponse',
            'trackSearch' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiTrackSearch',
            'trackSearchResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiTrackSearchResponse',
            'trackSkybillV2' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiTrackSkybillV2',
            'trackSkybillV2Response' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiTrackSkybillV2Response',
            'cancelSkybill' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiCancelSkybill',
            'cancelSkybillResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiCancelSkybillResponse',
            'trackSkybill' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiTrackSkybill',
            'trackSkybillResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiTrackSkybillResponse',
            'searchPOD' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiSearchPOD',
            'searchPODResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiSearchPODResponse',
            'searchPODWithSenderRef' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiSearchPODWithSenderRef',
            'searchPODWithSenderRefResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\TrackingService\\Structs\\ChronoApiSearchPODWithSenderRefResponse',
        ];
    }
}
