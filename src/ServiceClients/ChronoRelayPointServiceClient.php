<?php

namespace SengentoBV\ChronopostSdk\ServiceClients;

use SengentoBV\ChronopostSdk\ChronoApiClient;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;
use SengentoBV\ChronopostSdk\Services\ChronoSoapServiceMap;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Services\ChronoApiGet;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Services\ChronoApiRecherche;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiBureauDeTabacAvecCoord;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiBureauDeTabacAvecPF;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiGetAllChronopostAgences;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopost;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointChronopostAvecCoord;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiPointCHRResult;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDate;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParIdChronopostA2Pas;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParCodeproduitEtCodepostalEtDate;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParIdChronopostA2Pas;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopost;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopostInter;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostAvecCoordParId;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInter;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParService;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParServiceAGL;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiques;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParService;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParId;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiques;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParService;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTournee;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTourneeParTypeTourneeEtPosteComptable;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeCompleteResult;
use SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiTourneeResult;

class ChronoRelayPointServiceClient extends AbstractChronoServiceClient
{
    public function __construct(ChronoApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    //<editor-fold desc="Relay Point - Cancel API functions">
    /**
     * @param ChronoApiGetAllChronopostAgences $input
     * @return ChronoApiPointChronopost[]
     * @throws ChronoException
     */
    public function getAllChronopostAgences(ChronoApiGetAllChronopostAgences $input): array
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_GET);

        /** See {@see ChronoApiGet::getAllChronopostAgences()} and {@see ChronoApiGetAllChronopostAgencesResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getAllChronopostAgences', func_get_args(), __FUNCTION__, false)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Relay Point - Recherche API functions">
    /**
     * @param ChronoApiRecherchePointChronopostParId $input
     * @return ChronoApiPointChronopost[]
     * @throws ChronoException
     */
    public function recherchePointChronopostParId(ChronoApiRecherchePointChronopostParId $input): array
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointChronopostParId()} and {@see ChronoApiRecherchePointChronopostParIdResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointChronopostParId', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiRechercheBtAvecPFParIdChronopostA2Pas $input
     * @return ChronoApiBureauDeTabacAvecPF[]
     * @throws ChronoException
     */
    public function rechercheBtAvecPFParIdChronopostA2Pas(ChronoApiRechercheBtAvecPFParIdChronopostA2Pas $input): array
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::rechercheBtAvecPFParIdChronopostA2Pas()} and {@see ChronoApiRechercheBtAvecPFParIdChronopostA2PasResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'rechercheBtAvecPFParIdChronopostA2Pas', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiRechercheBtParIdChronopostA2Pas $input
     * @return ChronoApiBureauDeTabacAvecCoord[]
     * @throws ChronoException
     */
    public function rechercheBtParIdChronopostA2Pas(ChronoApiRechercheBtParIdChronopostA2Pas $input): array
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::rechercheBtParIdChronopostA2Pas()} and {@see ChronoApiRechercheBtParIdChronopostA2PasResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'rechercheBtParIdChronopostA2Pas', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiRechercheDetailPointChronopost $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function rechercheDetailPointChronopost(ChronoApiRechercheDetailPointChronopost $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::rechercheDetailPointChronopost()} and {@see ChronoApiRechercheDetailPointChronopostResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'rechercheDetailPointChronopost', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiRecherchePointChronopostAvecCoordParId $input
     * @return ChronoApiPointChronopostAvecCoord[]
     * @throws ChronoException
     */
    public function recherchePointChronopostAvecCoordParId(ChronoApiRecherchePointChronopostAvecCoordParId $input): array
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointChronopostAvecCoordParId()} and {@see ChronoApiRecherchePointChronopostAvecCoordParIdResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointChronopostAvecCoordParId', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiRecherchePointChronopostInter $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function recherchePointChronopostInter(ChronoApiRecherchePointChronopostInter $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointChronopostInter()} and {@see ChronoApiRecherchePointChronopostInterResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointChronopostInter', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParService $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function recherchePointRelaisParCoordonneesGeographiquesParService(ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParService $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointRelaisParCoordonneesGeographiquesParService()} and {@see ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointRelaisParCoordonneesGeographiquesParService', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiRecherchePointRelaisParCoordonneesGeographiques $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function recherchePointRelaisParCoordonneesGeographiques(ChronoApiRecherchePointRelaisParCoordonneesGeographiques $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointRelaisParCoordonneesGeographiques()} and {@see ChronoApiRecherchePointRelaisParCoordonneesGeographiquesResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointRelaisParCoordonneesGeographiques', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiRechercheTournee $input
     * @return ChronoApiTourneeResult
     * @throws ChronoException
     */
    public function rechercheTournee(ChronoApiRechercheTournee $input): ChronoApiTourneeResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::rechercheTournee()} and {@see ChronoApiRechercheTourneeResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'rechercheTournee', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiRecherchePointChronopostParCoordonneesGeographiques $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function recherchePointChronopostParCoordonneesGeographiques(ChronoApiRecherchePointChronopostParCoordonneesGeographiques $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointChronopostParCoordonneesGeographiques()} and {@see ChronoApiRecherchePointChronopostParCoordonneesGeographiquesResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointChronopostParCoordonneesGeographiques', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParService $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function recherchePointChronopostParCoordonneesGeographiquesParService(ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParService $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointChronopostParCoordonneesGeographiquesParService()} and {@see ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParServiceResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointChronopostParCoordonneesGeographiquesParService', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiRechercheDetailPointChronopostInter $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function rechercheDetailPointChronopostInter(ChronoApiRechercheDetailPointChronopostInter $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::rechercheDetailPointChronopostInter()} and {@see ChronoApiRechercheDetailPointChronopostInterResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'rechercheDetailPointChronopostInter', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiRechercheTourneeParTypeTourneeEtPosteComptable $input
     * @return ChronoApiTourneeCompleteResult
     * @throws ChronoException
     */
    public function rechercheTourneeParTypeTourneeEtPosteComptable(ChronoApiRechercheTourneeParTypeTourneeEtPosteComptable $input): ChronoApiTourneeCompleteResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::rechercheTourneeParTypeTourneeEtPosteComptable()} and {@see ChronoApiRechercheTourneeParTypeTourneeEtPosteComptableResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'rechercheTourneeParTypeTourneeEtPosteComptable', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDate $input
     * @return ChronoApiBureauDeTabacAvecPF[]
     * @throws ChronoException
     */
    public function rechercheBtAvecPFParCodeproduitEtCodepostalEtDate(ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDate $input): array
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::rechercheBtAvecPFParCodeproduitEtCodepostalEtDate()} and {@see ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'rechercheBtAvecPFParCodeproduitEtCodepostalEtDate', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiRecherchePointChronopostInterParServiceAGL $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function recherchePointChronopostInterParServiceAGL(ChronoApiRecherchePointChronopostInterParServiceAGL $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointChronopostInterParServiceAGL()} and {@see ChronoApiRecherchePointChronopostInterParServiceAGLResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointChronopostInterParServiceAGL', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiRecherchePointChronopostInterParService $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function recherchePointChronopostInterParService(ChronoApiRecherchePointChronopostInterParService $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointChronopostInterParService()} and {@see ChronoApiRecherchePointChronopostInterParServiceResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointChronopostInterParService', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ChronoApiRechercheBtParCodeproduitEtCodepostalEtDate $input
     * @return ChronoApiBureauDeTabacAvecCoord[]
     * @throws ChronoException
     */
    public function rechercheBtParCodeproduitEtCodepostalEtDate(ChronoApiRechercheBtParCodeproduitEtCodepostalEtDate $input): array
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::rechercheBtParCodeproduitEtCodepostalEtDate()} and {@see ChronoApiRechercheBtParCodeproduitEtCodepostalEtDateResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'rechercheBtParCodeproduitEtCodepostalEtDate', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiRecherchePointChronopost $input
     * @return ChronoApiPointCHRResult
     * @throws ChronoException
     */
    public function recherchePointChronopost(ChronoApiRecherchePointChronopost $input): ChronoApiPointCHRResult
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_RELAY_POINT_RECHERCHE);

        /** See {@see ChronoApiRecherche::recherchePointChronopost()} and {@see ChronoApiRecherchePointChronopostResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'recherchePointChronopost', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>
}