<?php

require 'vendor/autoload.php';

# SDK - access the API
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey(
    'Authorization',
    '----INSERT BEARER TOKEN HERE----'
);
$config->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Order ID

try {
    $result = $apiInstance->getOrder(1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
