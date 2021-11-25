<?php

use SengentoBV\ChronopostSdk\ChronoApiClient;

require_once __DIR__ . '/vendor/autoload.php';

// Read from .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$accountNumber = intval($_ENV['CHRONO_API_ACCOUNT_NUMBER'] ?? '0');
$password = $_ENV['CHRONO_API_PASSWORD'] ?? '';

$authentication = new \SengentoBV\ChronopostSdk\ChronoAuthentication($accountNumber, $password);

$apiClient = new ChronoApiClient(null, $authentication);

//$apiClient->setTestMode(true);
///$apiClient->setFaultHandler(...);

try {
    $response = $apiClient->getQuickCostService()->quickCost(new \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiQuickCost(

    ));
    print_r($response);
} catch (Exception $e) {
    echo '[' . get_class($e) . '] ' . $e->getMessage() . PHP_EOL . PHP_EOL . $e->getTraceAsString();
    echo json_encode($e->getPrevious()->detail);
}