# sengentobv/chronopost-sdk

Unofficial Chronopost API PHP SDK

Simple wrapper around the Chronopost SOAP APIs.

Note that this library is mostly untested at the moment, and the 'interface' should not be considered stable at this time.

If you do try this library and run into issues or have suggestions, report them at https://github.com/SengentoBV/chronopost-sdk/issues

## Installation & Usage

### Requirements

PHP 7.4 or later.

Check composer.json for a list of all the requirements.

### Composer

The recommended way to install this library is through
[Composer](https://getcomposer.org/).

```bash
composer require sengentobv/chronopost-sdk
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/chronopost-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure the authentication
$authentication = new \SengentoBV\ChronopostSdk\ChronoAuthentication($ACCOUNT_NUMBER, $PASSWORD, $OPTIONAL_SUBACCOUNT);

// Create an instance of the client
$apiClient = new \SengentoBV\ChronopostSdk\ChronoApiClient($authentication);

try {
    // Get an instance of the QuickSlot service
    $quickCostService = $apiClient->getQuickCostService();
    
    // Perform a call that does not require authentication
    $result = $quickCostService->calculateDeliveryTime(new \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateDeliveryTime(...))
    print_r($result);
    
    // Perform a call that does require authentication
    // NOTE: You have to leave the username/password empty as the authentication information will be (over)written automatically!
    $result = $quickCostService->calculateProducts(new \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiCalculateProducts(...))
    print_r($result);
    
} catch (\Exception $e) {
    echo $e->getMessage();
}

```

## API Endpoints

The following webservices have been wrapped/mapped.

- https://ws.chronopost.fr/quickcost-cxf/QuickcostServiceWS
- https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS
- https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS
- https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS
- https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS

## Authorization

The Chronopost uses multiple different methods to authenticate (using the same set of credentials). 

This library aims to aid you in this!

Whenever you create a new request object, you can (should) leave the fields meant for authentication empty as this library will do the heavy lifting for you by filling in (or overwriting) these fields automatically.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```
