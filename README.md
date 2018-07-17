# Official Unifysell API SDK

This packages combines the group of packages needed.

## Installation

### Include the package via composer

to use in composer add to the require section:
    
    "require": {
        "unifysell/unifysell-sdk-php": "*"
    }

### Installing composer

see https://getcomposer.org/download/

## Usage

You can have a look at the `example/complete-example.php` file for a basic usage example.

### Authenticate

    $keycloakClient = new \Unifysell\OAuth2\Client\Keycloak();
    $accessToken = $keycloakClient->createAccessToken();

### Make your first request

    $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey(
        'Authorization', 
        $keycloakClient->getAccessToken()->getToken()
    );
    $config->setApiKeyPrefix('Authorization', 'Bearer');
    
    $apiInstance = new Swagger\Client\Api\OrdersApi(
        new GuzzleHttp\Client(),
        $config
    );
    
    $result = $apiInstance->getOrder(1);
