<?php

require 'vendor/autoload.php';

//AUTH
function getAccessToken() {
    $keycloakClient = new \Unifysell\OAuth2\Client\Keycloak(
        '...',
        '...',
        '...'
    );

    $tokenFilename = '.token.json';

    if (file_exists($tokenFilename)) {
        echo 'access token file exists' . PHP_EOL;
        $tokenJson = json_decode(file_get_contents($tokenFilename), true);
        $keycloakClient->setAccessTokenFromArray($tokenJson);
    }

    if ($keycloakClient->tokenIsEmpty()) {
        echo 'creating new access token' . PHP_EOL;
        $keycloakClient->createAccessToken();
        file_put_contents($tokenFilename, json_encode($keycloakClient->getAccessToken()));
    }

    if ($keycloakClient->hasTokenExpired()) {
        try {
            echo 'token has expired -> refreshing' . PHP_EOL;
            $keycloakClient->refreshAccessToken();
        } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $exception) {
            echo 'session timed out. creating a new access token by credentials.' . PHP_EOL;
            $keycloakClient->createAccessToken();
            file_put_contents($tokenFilename, json_encode($keycloakClient->getAccessToken()));
        }
    }

    echo 'Access Token: '.$keycloakClient->getAccessToken()->getToken() . PHP_EOL;

    return $keycloakClient->getAccessToken()->getToken();
}

//SDK

$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', getAccessToken());
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
