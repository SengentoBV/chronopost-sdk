<?php

namespace SengentoBV\ChronopostSdk\ServiceClients;

use SengentoBV\ChronopostSdk\ChronoApiClient;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;
use SengentoBV\ChronopostSdk\Services\ChronoSoapServiceMap;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiCreer;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiFaisabilite;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Services\ChronoApiGet;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiAnnulerEnlevements;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementEurope;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiCreerEnlevementNational;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiEsdResultContraintesAgenceValue;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiFaisabiliteESD;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybill;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithType;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndMode;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeAuth;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetReservedSkybillWithTypeAndModeByReservation;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetRouting;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiGetShippingInformation;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiRechercherContraintesEnlevement;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultAnnulerEnlevement;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultEnlevementNational;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValue;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultExpeditionValueV3;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultFaisabiliteESD;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillValue;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetReservedSkybillWithTypeValue;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultGetRouting;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMonoParcelExpeditionValue;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultMultiParcelExpeditionValue;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultPickupOrCollectionRequest;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValue;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationExpeditionValueV2;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValue;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultReservationMultiParcelExpeditionValueV2;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiResultShippingInfo;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShipping as ChronoApiShippingInput;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcel;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV3;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV4;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelV5;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservation;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV2;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingMultiParcelWithReservationV3;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV2;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV3;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV4;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV5;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV6;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingV7;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnly;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithESDOnlyV2;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservation;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClient;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC;
use SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationV2;

class ChronoShippingServiceClient extends AbstractChronoServiceClient
{
    public function __construct(ChronoApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    //<editor-fold desc="Shipping - Annuler API functions">
    /**
     * @param ChronoApiAnnulerEnlevements $input
     * @return ChronoApiResultAnnulerEnlevement
     * @throws ChronoException
     */
    public function annulerEnlevements(ChronoApiAnnulerEnlevements $input): ChronoApiResultAnnulerEnlevement
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_ANNULER);

        /** See {@see ChronoApiAnnuler::annulerEnlevements()} and {@see ChronoApiAnnulerEnlevementsResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'annulerEnlevements', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Shipping - Creer API functions">
    /**
     * @param ChronoApiCreerEnlevementNational $input
     * @return ChronoApiResultEnlevementNational
     * @throws ChronoException
     */
    public function creerEnlevementNational(ChronoApiCreerEnlevementNational $input): ChronoApiResultEnlevementNational
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_CREER);

        /** See {@see ChronoApiCreer::creerEnlevementNational()} and {@see ChronoApiCreerEnlevementNationalResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'creerEnlevementNational', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiCreerEnlevementEurope $input
     * @return ChronoApiResultPickupOrCollectionRequest
     * @throws ChronoException
     */
    public function creerEnlevementEurope(ChronoApiCreerEnlevementEurope $input): ChronoApiResultPickupOrCollectionRequest
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_CREER);

        /** See {@see ChronoApiCreer::creerEnlevementEurope()} and {@see ChronoApiCreerEnlevementEuropeResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'creerEnlevementEurope', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Shipping - Faisabilite API functions">
    /**
     * @param ChronoApiFaisabiliteESD $input
     * @return ChronoApiResultFaisabiliteESD
     * @throws ChronoException
     */
    public function faisabiliteESD(ChronoApiFaisabiliteESD $input): ChronoApiResultFaisabiliteESD
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_FAISABILITE);

        /** See {@see ChronoApiFaisabilite::faisabiliteESD()} and {@see ChronoApiFaisabiliteESDResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'faisabiliteESD', func_get_args(), __FUNCTION__, false)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Shipping - Get API functions">
    /**
     * @param ChronoApiGetReservedSkybillWithType $input
     * @return ChronoApiResultGetReservedSkybillWithTypeValue
     * @throws ChronoException
     */
    public function getReservedSkybillWithType(ChronoApiGetReservedSkybillWithType $input): ChronoApiResultGetReservedSkybillWithTypeValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_GET);

        /** See {@see ChronoApiGet::getReservedSkybillWithType()} and {@see ChronoApiGetReservedSkybillWithTypeResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getReservedSkybillWithType', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiGetReservedSkybillWithTypeAndModeAuth $input
     * @return ChronoApiResultGetReservedSkybillWithTypeValue
     * @throws ChronoException
     */
    public function getReservedSkybillWithTypeAndModeAuth(ChronoApiGetReservedSkybillWithTypeAndModeAuth $input): ChronoApiResultGetReservedSkybillWithTypeValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_GET);

        /** See {@see ChronoApiGet::getReservedSkybillWithTypeAndModeAuth()} and {@see ChronoApiGetReservedSkybillWithTypeAndModeAuthResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getReservedSkybillWithTypeAndModeAuth', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiGetReservedSkybillWithTypeAndModeByReservation $input
     * @return ChronoApiResultGetReservedSkybillWithTypeValue
     * @throws ChronoException
     */
    public function getReservedSkybillWithTypeAndModeByReservation(ChronoApiGetReservedSkybillWithTypeAndModeByReservation $input): ChronoApiResultGetReservedSkybillWithTypeValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_GET);

        /** See {@see ChronoApiGet::getReservedSkybillWithTypeAndModeByReservation()} and {@see ChronoApiGetReservedSkybillWithTypeAndModeByReservationResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getReservedSkybillWithTypeAndModeByReservation', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiGetReservedSkybill $input
     * @return ChronoApiResultGetReservedSkybillValue
     * @throws ChronoException
     */
    public function getReservedSkybill(ChronoApiGetReservedSkybill $input): ChronoApiResultGetReservedSkybillValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_GET);

        /** See {@see ChronoApiGet::getReservedSkybill()} and {@see ChronoApiGetReservedSkybillResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getReservedSkybill', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiGetReservedSkybillWithTypeAndMode $input
     * @return ChronoApiResultGetReservedSkybillWithTypeValue
     * @throws ChronoException
     */
    public function getReservedSkybillWithTypeAndMode(ChronoApiGetReservedSkybillWithTypeAndMode $input): ChronoApiResultGetReservedSkybillWithTypeValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_GET);

        /** See {@see ChronoApiGet::getReservedSkybillWithTypeAndMode()} and {@see ChronoApiGetReservedSkybillWithTypeAndModeResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getReservedSkybillWithTypeAndMode', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiGetShippingInformation $input
     * @return ChronoApiResultShippingInfo
     * @throws ChronoException
     */
    public function getShippingInformation(ChronoApiGetShippingInformation $input): ChronoApiResultShippingInfo
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_GET);

        /** See {@see ChronoApiGet::getShippingInformation()} and {@see ChronoApiGetShippingInformationResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getShippingInformation', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiGetRouting $input
     * @return ChronoApiResultGetRouting
     * @throws ChronoException
     */
    public function getRouting(ChronoApiGetRouting $input): ChronoApiResultGetRouting
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_GET);

        /** See {@see ChronoApiGet::getRouting()} and {@see ChronoApiGetRoutingResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getRouting', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Shipping - Rechercher API functions">
    /**
     * @param ChronoApiRechercherContraintesEnlevement $input
     * @return ChronoApiEsdResultContraintesAgenceValue
     * @throws ChronoException
     */
    public function rechercherContraintesEnlevement(ChronoApiRechercherContraintesEnlevement $input): ChronoApiEsdResultContraintesAgenceValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_RECHERCHER);

        /** See {@see ChronoApiRechercher::rechercherContraintesEnlevement()} and {@see ChronoApiRechercherContraintesEnlevementResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'rechercherContraintesEnlevement', func_get_args(), __FUNCTION__, false)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Shipping - Shipping API functions">
    /**
     * @param ChronoApiShippingV2 $input
     * @return ChronoApiResultExpeditionValue
     * @throws ChronoException
     */
    public function shippingV2(ChronoApiShippingV2 $input): ChronoApiResultExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingV2()} and {@see ChronoApiShippingV2Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingV2', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingV3 $input
     * @return ChronoApiResultExpeditionValue
     * @throws ChronoException
     */
    public function shippingV3(ChronoApiShippingV3 $input): ChronoApiResultExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingV3()} and {@see ChronoApiShippingV3Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingV3', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingMultiParcel $input
     * @return ChronoApiResultMultiParcelExpeditionValue
     * @throws ChronoException
     */
    public function shippingMultiParcel(ChronoApiShippingMultiParcel $input): ChronoApiResultMultiParcelExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingMultiParcel()} and {@see ChronoApiShippingMultiParcelResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingMultiParcel', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingWithESDOnlyV2 $input
     * @return ChronoApiResultReservationExpeditionValue
     * @throws ChronoException
     */
    public function shippingWithESDOnlyV2(ChronoApiShippingWithESDOnlyV2 $input): ChronoApiResultReservationExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingWithESDOnlyV2()} and {@see ChronoApiShippingWithESDOnlyV2Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingWithESDOnlyV2', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingWithReservationV2 $input
     * @return ChronoApiResultReservationExpeditionValueV2
     * @throws ChronoException
     */
    public function shippingWithReservationV2(ChronoApiShippingWithReservationV2 $input): ChronoApiResultReservationExpeditionValueV2
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingWithReservationV2()} and {@see ChronoApiShippingWithReservationV2Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingWithReservationV2', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingInput $input
     * @return ChronoApiResultExpeditionValue
     * @throws ChronoException
     */
    public function shipping(ChronoApiShippingInput $input): ChronoApiResultExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shipping()} and {@see ChronoApiShippingResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shipping', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingMultiParcelWithReservation $input
     * @return ChronoApiResultReservationMultiParcelExpeditionValue
     * @throws ChronoException
     */
    public function shippingMultiParcelWithReservation(ChronoApiShippingMultiParcelWithReservation $input): ChronoApiResultReservationMultiParcelExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingMultiParcelWithReservation()} and {@see ChronoApiShippingMultiParcelWithReservationResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingMultiParcelWithReservation', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingMultiParcelV4 $input
     * @return ChronoApiResultMultiParcelExpeditionValue
     * @throws ChronoException
     */
    public function shippingMultiParcelV4(ChronoApiShippingMultiParcelV4 $input): ChronoApiResultMultiParcelExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingMultiParcelV4()} and {@see ChronoApiShippingMultiParcelV4Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingMultiParcelV4', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingMultiParcelV5 $input
     * @return ChronoApiResultMultiParcelExpeditionValue
     * @throws ChronoException
     */
    public function shippingMultiParcelV5(ChronoApiShippingMultiParcelV5 $input): ChronoApiResultMultiParcelExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingMultiParcelV5()} and {@see ChronoApiShippingMultiParcelV5Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingMultiParcelV5', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingMultiParcelWithReservationV3 $input
     * @return ChronoApiResultReservationMultiParcelExpeditionValueV2
     * @throws ChronoException
     */
    public function shippingMultiParcelWithReservationV3(ChronoApiShippingMultiParcelWithReservationV3 $input): ChronoApiResultReservationMultiParcelExpeditionValueV2
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingMultiParcelWithReservationV3()} and {@see ChronoApiShippingMultiParcelWithReservationV3Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingMultiParcelWithReservationV3', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingV6 $input
     * @return ChronoApiResultExpeditionValueV3
     * @throws ChronoException
     */
    public function shippingV6(ChronoApiShippingV6 $input): ChronoApiResultExpeditionValueV3
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingV6()} and {@see ChronoApiShippingV6Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingV6', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingWithReservation $input
     * @return ChronoApiResultReservationExpeditionValue
     * @throws ChronoException
     */
    public function shippingWithReservation(ChronoApiShippingWithReservation $input): ChronoApiResultReservationExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingWithReservation()} and {@see ChronoApiShippingWithReservationResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingWithReservation', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingV7 $input
     * @return ChronoApiResultMonoParcelExpeditionValue
     * @throws ChronoException
     */
    public function shippingV7(ChronoApiShippingV7 $input): ChronoApiResultMonoParcelExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingV7()} and {@see ChronoApiShippingV7Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingV7', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingWithReservationAndESDWithRefClient $input
     * @return ChronoApiResultReservationExpeditionValue
     * @throws ChronoException
     */
    public function shippingWithReservationAndESDWithRefClient(ChronoApiShippingWithReservationAndESDWithRefClient $input): ChronoApiResultReservationExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingWithReservationAndESDWithRefClient()} and {@see ChronoApiShippingWithReservationAndESDWithRefClientResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingWithReservationAndESDWithRefClient', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingV4 $input
     * @return ChronoApiResultExpeditionValue
     * @throws ChronoException
     */
    public function shippingV4(ChronoApiShippingV4 $input): ChronoApiResultExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingV4()} and {@see ChronoApiShippingV4Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingV4', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingV5 $input
     * @return ChronoApiResultExpeditionValue
     * @throws ChronoException
     */
    public function shippingV5(ChronoApiShippingV5 $input): ChronoApiResultExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingV5()} and {@see ChronoApiShippingV5Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingV5', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingWithReservationAndESDWithRefClientPC $input
     * @return ChronoApiResultReservationExpeditionValue
     * @throws ChronoException
     */
    public function shippingWithReservationAndESDWithRefClientPC(ChronoApiShippingWithReservationAndESDWithRefClientPC $input): ChronoApiResultReservationExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingWithReservationAndESDWithRefClientPC()} and {@see ChronoApiShippingWithReservationAndESDWithRefClientPCResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingWithReservationAndESDWithRefClientPC', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingMultiParcelWithReservationV2 $input
     * @return ChronoApiResultReservationMultiParcelExpeditionValueV2
     * @throws ChronoException
     */
    public function shippingMultiParcelWithReservationV2(ChronoApiShippingMultiParcelWithReservationV2 $input): ChronoApiResultReservationMultiParcelExpeditionValueV2
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingMultiParcelWithReservationV2()} and {@see ChronoApiShippingMultiParcelWithReservationV2Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingMultiParcelWithReservationV2', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingWithESDOnly $input
     * @return ChronoApiResultReservationExpeditionValue
     * @throws ChronoException
     */
    public function shippingWithESDOnly(ChronoApiShippingWithESDOnly $input): ChronoApiResultReservationExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingWithESDOnly()} and {@see ChronoApiShippingWithESDOnlyResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingWithESDOnly', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiShippingMultiParcelV3 $input
     * @return ChronoApiResultMultiParcelExpeditionValue
     * @throws ChronoException
     */
    public function shippingMultiParcelV3(ChronoApiShippingMultiParcelV3 $input): ChronoApiResultMultiParcelExpeditionValue
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_SHIPPING_SHIPPING);

        /** See {@see ChronoApiShipping::shippingMultiParcelV3()} and {@see ChronoApiShippingMultiParcelV3Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'shippingMultiParcelV3', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>
}