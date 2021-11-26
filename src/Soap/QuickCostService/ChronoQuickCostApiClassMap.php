<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService;

/**
 * Class which returns the class map definition
 * @package ChronoApi
 */
class ChronoQuickCostApiClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'resultCalculateDeliveryTime' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiResultCalculateDeliveryTime',
            'resultQuickCost' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiResultQuickCost',
            'service' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiService',
            'resultQuickCostV2' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiResultQuickCostV2',
            'assurance' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiAssurance',
            'resultCalculateProducts' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiResultCalculateProducts',
            'product' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiProduct',
            'calculateDeliveryTime' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiCalculateDeliveryTime',
            'calculateDeliveryTimeResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiCalculateDeliveryTimeResponse',
            'quickCost' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiQuickCost',
            'quickCostResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiQuickCostResponse',
            'calculateProducts' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiCalculateProducts',
            'calculateProductsResponse' => '\\SengentoBV\\ChronopostSdk\\Soap\\QuickCostService\\Structs\\ChronoApiCalculateProductsResponse',
        ];
    }
}
