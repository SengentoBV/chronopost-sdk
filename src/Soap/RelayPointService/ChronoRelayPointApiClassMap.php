<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService;

/**
 * Class which returns the class map definition
 * @package ChronoApi
 */
class ChronoRelayPointApiClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'pointChronopost' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiPointChronopost',
            'bureauDeTabac' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiBureauDeTabac',
            'bureauDeTabacAvecCoord' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiBureauDeTabacAvecCoord',
            'bureauDeTabacAvecPF' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiBureauDeTabacAvecPF',
            'pointCHRResult' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiPointCHRResult',
            'pointCHR' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiPointCHR',
            'listeHoraireOuverturePourUnJour' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiListeHoraireOuverturePourUnJour',
            'horaireOuverture' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiHoraireOuverture',
            'periodeFermeture' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiPeriodeFermeture',
            'pointChronopostAvecCoord' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiPointChronopostAvecCoord',
            'tourneeResult' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiTourneeResult',
            'tournee' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiTournee',
            'tourneeCompleteResult' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiTourneeCompleteResult',
            'tourneeComplete' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiTourneeComplete',
            'recherchePointChronopostParId' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostParId',
            'recherchePointChronopostParIdResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostParIdResponse',
            'rechercheBtAvecPFParIdChronopostA2Pas' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheBtAvecPFParIdChronopostA2Pas',
            'rechercheBtAvecPFParIdChronopostA2PasResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheBtAvecPFParIdChronopostA2PasResponse',
            'rechercheBtParIdChronopostA2Pas' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheBtParIdChronopostA2Pas',
            'rechercheBtParIdChronopostA2PasResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheBtParIdChronopostA2PasResponse',
            'rechercheDetailPointChronopost' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheDetailPointChronopost',
            'rechercheDetailPointChronopostResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheDetailPointChronopostResponse',
            'getAllChronopostAgences' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiGetAllChronopostAgences',
            'getAllChronopostAgencesResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiGetAllChronopostAgencesResponse',
            'recherchePointChronopostAvecCoordParId' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostAvecCoordParId',
            'recherchePointChronopostAvecCoordParIdResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostAvecCoordParIdResponse',
            'recherchePointRelaisParCoordonneesGeographiquesParService' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParService',
            'recherchePointRelaisParCoordonneesGeographiquesParServiceResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse',
            'recherchePointChronopostInter' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostInter',
            'recherchePointChronopostInterResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostInterResponse',
            'rechercheTournee' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheTournee',
            'rechercheTourneeResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheTourneeResponse',
            'recherchePointRelaisParCoordonneesGeographiques' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointRelaisParCoordonneesGeographiques',
            'recherchePointRelaisParCoordonneesGeographiquesResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesResponse',
            'recherchePointChronopostParCoordonneesGeographiques' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostParCoordonneesGeographiques',
            'recherchePointChronopostParCoordonneesGeographiquesResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesResponse',
            'recherchePointChronopostParCoordonneesGeographiquesParService' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParService',
            'recherchePointChronopostParCoordonneesGeographiquesParServiceResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParServiceResponse',
            'rechercheDetailPointChronopostInter' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheDetailPointChronopostInter',
            'rechercheDetailPointChronopostInterResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheDetailPointChronopostInterResponse',
            'rechercheTourneeParTypeTourneeEtPosteComptable' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheTourneeParTypeTourneeEtPosteComptable',
            'rechercheTourneeParTypeTourneeEtPosteComptableResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheTourneeParTypeTourneeEtPosteComptableResponse',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDate' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDate',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse',
            'recherchePointChronopostInterParServiceAGL' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostInterParServiceAGL',
            'recherchePointChronopostInterParServiceAGLResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostInterParServiceAGLResponse',
            'recherchePointChronopostInterParService' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostInterParService',
            'recherchePointChronopostInterParServiceResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostInterParServiceResponse',
            'recherchePointChronopost' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopost',
            'recherchePointChronopostResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRecherchePointChronopostResponse',
            'rechercheBtParCodeproduitEtCodepostalEtDate' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheBtParCodeproduitEtCodepostalEtDate',
            'rechercheBtParCodeproduitEtCodepostalEtDateResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\RelayPointService\\Structs\\ChronoApiRechercheBtParCodeproduitEtCodepostalEtDateResponse',
        ];
    }
}
