<?php

namespace SengentoBV\ChronopostSdk\ServiceClients;

use SengentoBV\ChronopostSdk\ChronoApiClient;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;
use SengentoBV\ChronopostSdk\Services\ChronoSoapServiceMap;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiCancelSkybill;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultCancelSkybill;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPOD;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultSearchPODWithSenderRef;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSearch;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSkybill;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackSkybillV2;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiResultTrackWithSenderRef;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPOD;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiSearchPODWithSenderRef;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSearch;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybill;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackSkybillV2;
use SengentoBV\ChronopostSdk\Soap\TrackingService\Structs\ChronoApiTrackWithSenderRef;

class ChronoTrackingServiceClient extends AbstractChronoServiceClient
{
    public function __construct(ChronoApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    //<editor-fold desc="Tracking - Cancel API functions">
    /**
     * @param ChronoApiCancelSkybill $input
     * @return ChronoApiResultCancelSkybill
     * @throws ChronoException
     */
    public function cancelSkybill(ChronoApiCancelSkybill $input): ChronoApiResultCancelSkybill
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SLOT_GEO_CONFIRM);

        /** See {@see ChronoApiCancel::cancelSkybill()} and {@see ChronoApiCancelSkybillResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'cancelSkybill', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Tracking - Search API functions">
    /**
     * @param ChronoApiSearchPOD $input
     * @return ChronoApiResultSearchPOD
     * @throws ChronoException
     */
    public function searchPOD(ChronoApiSearchPOD $input): ChronoApiResultSearchPOD
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_TRACKING_SEARCH);

        /** See {@see ChronoApiSearch::searchPOD()} and {@see ChronoApiSearchPODResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'searchPOD', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiSearchPODWithSenderRef $input
     * @return ChronoApiResultSearchPODWithSenderRef
     * @throws ChronoException
     */
    public function searchPODWithSenderRef(ChronoApiSearchPODWithSenderRef $input): ChronoApiResultSearchPODWithSenderRef
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_TRACKING_SEARCH);

        /** See {@see ChronoApiSearch::searchPODWithSenderRef()} and {@see ChronoApiSearchPODWithSenderRefResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'searchPODWithSenderRef', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Tracking - Track API functions">
    /**
     * @param ChronoApiTrackWithSenderRef $input
     * @return ChronoApiResultTrackWithSenderRef
     * @throws ChronoException
     */
    public function trackWithSenderRef(ChronoApiTrackWithSenderRef $input): ChronoApiResultTrackWithSenderRef
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_TRACKING_TRACK);

        /** See {@see ChronoApiTrack::trackWithSenderRef()} and {@see ChronoApiTrackWithSenderRefResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'trackWithSenderRef', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiTrackSearch $input
     * @return ChronoApiResultTrackSearch
     * @throws ChronoException
     */
    public function trackSearch(ChronoApiTrackSearch $input): ChronoApiResultTrackSearch
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_TRACKING_TRACK);

        /** See {@see ChronoApiTrack::trackSearch()} and {@see ChronoApiTrackSearchResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'trackSearch', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiTrackSkybillV2 $input
     * @return ChronoApiResultTrackSkybillV2
     * @throws ChronoException
     */
    public function trackSkybillV2(ChronoApiTrackSkybillV2 $input): ChronoApiResultTrackSkybillV2
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_TRACKING_TRACK);

        /** See {@see ChronoApiTrack::trackSkybillV2()} and {@see ChronoApiTrackSkybillV2Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'trackSkybillV2', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiTrackSkybill $input
     * @return ChronoApiResultTrackSkybill
     * @throws ChronoException
     */
    public function trackSkybill(ChronoApiTrackSkybill $input): ChronoApiResultTrackSkybill
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_TRACKING_TRACK);

        /** See {@see ChronoApiTrack::trackSkybill()} and {@see ChronoApiTrackSkybillResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'trackSkybill', func_get_args(), __FUNCTION__, false)->getReturn();
    }
    //</editor-fold>
}