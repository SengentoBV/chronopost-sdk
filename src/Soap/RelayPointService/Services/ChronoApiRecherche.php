<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\RelayPointService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Recherche Services
 * @package ChronoApi
 * @subpackage Services
 */
class ChronoApiRecherche extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named recherchePointChronopostParId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParId $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParIdResponse|bool
     */
    public function recherchePointChronopostParId(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParId $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParId = $this->getSoapClient()->__soapCall('recherchePointChronopostParId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtAvecPFParIdChronopostA2Pas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParIdChronopostA2Pas $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtAvecPFParIdChronopostA2Pas(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParIdChronopostA2Pas $parameters)
    {
        try {
            $this->setResult($resultRechercheBtAvecPFParIdChronopostA2Pas = $this->getSoapClient()->__soapCall('rechercheBtAvecPFParIdChronopostA2Pas', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtAvecPFParIdChronopostA2Pas;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheBtParIdChronopostA2Pas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParIdChronopostA2Pas $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtParIdChronopostA2Pas(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParIdChronopostA2Pas $parameters)
    {
        try {
            $this->setResult($resultRechercheBtParIdChronopostA2Pas = $this->getSoapClient()->__soapCall('rechercheBtParIdChronopostA2Pas', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtParIdChronopostA2Pas;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheDetailPointChronopost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopost $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopostResponse|bool
     */
    public function rechercheDetailPointChronopost(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopost $parameters)
    {
        try {
            $this->setResult($resultRechercheDetailPointChronopost = $this->getSoapClient()->__soapCall('rechercheDetailPointChronopost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheDetailPointChronopost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostAvecCoordParId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostAvecCoordParId $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostAvecCoordParIdResponse|bool
     */
    public function recherchePointChronopostAvecCoordParId(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostAvecCoordParId $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostAvecCoordParId = $this->getSoapClient()->__soapCall('recherchePointChronopostAvecCoordParId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostAvecCoordParId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopostInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInter $parameters
         * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterResponse|bool
     */
    public function recherchePointChronopostInter(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInter $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInter = $this->getSoapClient()->__soapCall('recherchePointChronopostInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointRelaisParCoordonneesGeographiquesParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParService $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiquesParService(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointRelaisParCoordonneesGeographiquesParService = $this->getSoapClient()->__soapCall('recherchePointRelaisParCoordonneesGeographiquesParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointRelaisParCoordonneesGeographiquesParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointRelaisParCoordonneesGeographiques
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiques $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiques(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiques $parameters)
    {
        try {
            $this->setResult($resultRecherchePointRelaisParCoordonneesGeographiques = $this->getSoapClient()->__soapCall('recherchePointRelaisParCoordonneesGeographiques', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointRelaisParCoordonneesGeographiques;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheTournee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTournee $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTourneeResponse|bool
     */
    public function rechercheTournee(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTournee $parameters)
    {
        try {
            $this->setResult($resultRechercheTournee = $this->getSoapClient()->__soapCall('rechercheTournee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheTournee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostParCoordonneesGeographiques
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiques $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiques(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiques $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParCoordonneesGeographiques = $this->getSoapClient()->__soapCall('recherchePointChronopostParCoordonneesGeographiques', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParCoordonneesGeographiques;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostParCoordonneesGeographiquesParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParService $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiquesParService(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParCoordonneesGeographiquesParService = $this->getSoapClient()->__soapCall('recherchePointChronopostParCoordonneesGeographiquesParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParCoordonneesGeographiquesParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheDetailPointChronopostInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopostInter $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopostInterResponse|bool
     */
    public function rechercheDetailPointChronopostInter(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopostInter $parameters)
    {
        try {
            $this->setResult($resultRechercheDetailPointChronopostInter = $this->getSoapClient()->__soapCall('rechercheDetailPointChronopostInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheDetailPointChronopostInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheTourneeParTypeTourneeEtPosteComptable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTourneeParTypeTourneeEtPosteComptable $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTourneeParTypeTourneeEtPosteComptableResponse|bool
     */
    public function rechercheTourneeParTypeTourneeEtPosteComptable(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTourneeParTypeTourneeEtPosteComptable $parameters)
    {
        try {
            $this->setResult($resultRechercheTourneeParTypeTourneeEtPosteComptable = $this->getSoapClient()->__soapCall('rechercheTourneeParTypeTourneeEtPosteComptable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheTourneeParTypeTourneeEtPosteComptable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtAvecPFParCodeproduitEtCodepostalEtDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtAvecPFParCodeproduitEtCodepostalEtDate(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters)
    {
        try {
            $this->setResult($resultRechercheBtAvecPFParCodeproduitEtCodepostalEtDate = $this->getSoapClient()->__soapCall('rechercheBtAvecPFParCodeproduitEtCodepostalEtDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtAvecPFParCodeproduitEtCodepostalEtDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostInterParServiceAGL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParServiceAGL $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParServiceAGLResponse|bool
     */
    public function recherchePointChronopostInterParServiceAGL(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParServiceAGL $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInterParServiceAGL = $this->getSoapClient()->__soapCall('recherchePointChronopostInterParServiceAGL', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInterParServiceAGL;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostInterParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParService $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParServiceResponse|bool
     */
    public function recherchePointChronopostInterParService(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInterParService = $this->getSoapClient()->__soapCall('recherchePointChronopostInterParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInterParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtParCodeproduitEtCodepostalEtDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParCodeproduitEtCodepostalEtDate $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtParCodeproduitEtCodepostalEtDate(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParCodeproduitEtCodepostalEtDate $parameters)
    {
        try {
            $this->setResult($resultRechercheBtParCodeproduitEtCodepostalEtDate = $this->getSoapClient()->__soapCall('rechercheBtParCodeproduitEtCodepostalEtDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtParCodeproduitEtCodepostalEtDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost $parameters
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostResponse|bool
     */
    public function recherchePointChronopost(\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopost $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopost = $this->getSoapClient()->__soapCall('recherchePointChronopost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtAvecPFParIdChronopostA2PasResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParCodeproduitEtCodepostalEtDateResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheBtParIdChronopostA2PasResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopostInterResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheDetailPointChronopostResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostAvecCoordParIdResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParServiceAGLResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterParServiceResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostInterResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParCoordonneesGeographiquesResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostParIdResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointChronopostResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRecherchePointRelaisParCoordonneesGeographiquesResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTourneeParTypeTourneeEtPosteComptableResponse|\SengentoBV\ChronopostSdk\Soap\RelayPointService\Structs\ChronoApiRechercheTourneeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
