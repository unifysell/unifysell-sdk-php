<?php

require 'vendor/autoload.php';

# SDK - access the API
$config = Unifysell\SDK\Configuration::getDefaultConfiguration();
$config->setApiKey(
    'Authorization',
    '----INSERT BEARER TOKEN HERE----'
);
$config->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\PaymentsApi(
    new GuzzleHttp\Client(),
    $config
);

$apiInstance->getConfig();

$id = 1; // int | Order ID

try {
    $result = $apiInstance->getPaymentV1(1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
