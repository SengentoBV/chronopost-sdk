<?php

namespace SengentoBV\ChronopostSdk\ServiceClients;

use Exception;
use SengentoBV\ChronopostSdk\ChronoApiClient;
use SengentoBV\ChronopostSdk\Exceptions\ChronoException;
use SengentoBV\ChronopostSdk\Exceptions\ChronoSoapFaultException;
use SengentoBV\ChronopostSdk\Services\ChronoSoapServiceMap;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Services\ChronoApiCalculate;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Services\ChronoApiQuick;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateProducts;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiQuickCost;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateDeliveryTime;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts;
use SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultQuickCostV2;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class ChronoQuickCostServiceClient extends AbstractChronoServiceClient
{
    public function __construct(ChronoApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    //<editor-fold desc="QuickCost - Quick API functions">
    /**
     * @param ChronoApiQuickCost $input
     * @return ChronoApiResultQuickCostV2
     * @throws ChronoException
     */
    public function quickCost(ChronoApiQuickCost $input): ChronoApiResultQuickCostV2
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_QUICK_COST_QUICK);

        /** See {@see ChronoApiQuick::quickCost()} and {@see ChronoApiQuickCostResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'quickCost', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="QuickCost - Calculate API functions">
    /**
     * @param ChronoApiCalculateDeliveryTime $input
     * @return ChronoApiResultCalculateDeliveryTime
     * @throws ChronoException
     */
    public function calculateDeliveryTime(ChronoApiCalculateDeliveryTime $input): ChronoApiResultCalculateDeliveryTime
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_QUICK_COST_CALCULATE);

        /** See {@see ChronoApiCalculate::calculateDeliveryTime()} and {@see ChronoApiCalculateDeliveryTimeResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'calculateDeliveryTime', func_get_args(), __FUNCTION__, false)->getReturn();
    }

    /**
     * @param ChronoApiCalculateProducts $input
     * @return ChronoApiResultCalculateProducts
     * @throws ChronoException
     */
    public function calculateProducts(ChronoApiCalculateProducts $input): ChronoApiResultCalculateProducts
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ChronoSoapServiceMap::SERVICE_QUICK_COST_CALCULATE);

        /** See {@see ChronoApiCalculate::calculateProducts()} and {@see ChronoApiCalculateProductsResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'calculateProducts', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>
}