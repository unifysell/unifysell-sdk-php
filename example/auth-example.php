<?php

require 'vendor/autoload.php';

# creating the keycloak client without params will automatically set demo credentials
$keycloakDemoClient = new \Unifysell\OAuth2\Client\Keycloak();

$tokenFilename = '.token.json';

if (file_exists($tokenFilename)) {
    echo 'access token file exists' . PHP_EOL;
    $tokenJson = json_decode(file_get_contents($tokenFilename), true);
    $keycloakDemoClient->setAccessTokenFromArray($tokenJson);
}

if ($keycloakDemoClient->tokenIsEmpty()) {
    echo 'creating new access token' . PHP_EOL;
    $keycloakDemoClient->createAccessToken();
    file_put_contents($tokenFilename, json_encode($keycloakDemoClient->getAccessToken()));
}

if ($keycloakDemoClient->hasTokenExpired()) {
    try {
        echo 'token has expired -> refreshing' . PHP_EOL;
        $keycloakDemoClient->refreshAccessToken();
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $exception) {
        echo 'session timed out. creating a new access token by credentials.' . PHP_EOL;
        $keycloakDemoClient->createAccessToken();
        file_put_contents($tokenFilename, json_encode($keycloakDemoClient->getAccessToken()));
    }
}

echo json_encode($keycloakDemoClient->getAccessToken()) . PHP_EOL . PHP_EOL;
echo 'Access Token: '.$keycloakDemoClient->getAccessToken()->getToken() . PHP_EOL;
