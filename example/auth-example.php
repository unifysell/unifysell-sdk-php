<?php

require 'vendor/autoload.php';

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

echo json_encode($keycloakClient->getAccessToken()) . PHP_EOL . PHP_EOL;
echo 'Access Token: '.$keycloakClient->getAccessToken()->getToken() . PHP_EOL;
