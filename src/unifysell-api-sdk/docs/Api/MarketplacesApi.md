# Unifysell\SDK\MarketplacesApi

All URIs are relative to *https://testing.api.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMarketplace**](MarketplacesApi.md#createmarketplace) | **POST** /api/marketplace | create a new marketplace
[**createMarketplaceV1**](MarketplacesApi.md#createmarketplacev1) | **POST** /api/v1/marketplace | create a new marketplace
[**getMarketplace**](MarketplacesApi.md#getmarketplace) | **GET** /api/marketplace/{id} | Show marketplace
[**getMarketplaceV1**](MarketplacesApi.md#getmarketplacev1) | **GET** /api/v1/marketplace/{id} | Show marketplace
[**listMarketplaces**](MarketplacesApi.md#listmarketplaces) | **GET** /api/marketplace | List marketplaces
[**listMarketplacesV1**](MarketplacesApi.md#listmarketplacesv1) | **GET** /api/v1/marketplace | List marketplaces
[**updateMarketplace**](MarketplacesApi.md#updatemarketplace) | **PATCH** /api/marketplace | update a marketplace
[**updateMarketplaceV1**](MarketplacesApi.md#updatemarketplacev1) | **PATCH** /api/v1/marketplace | update a marketplace

# **createMarketplace**
> \Unifysell\SDK\Model\CreateMarketplaceResponse createMarketplace($body)

create a new marketplace

Create a marketplace by giving data for a complete and valid marketplace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | the request object for create marketplace

try {
    $result = $apiInstance->createMarketplace($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->createMarketplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| the request object for create marketplace |

### Return type

[**\Unifysell\SDK\Model\CreateMarketplaceResponse**](../Model/CreateMarketplaceResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMarketplaceV1**
> \Unifysell\SDK\Model\CreateMarketplaceResponse createMarketplaceV1($body)

create a new marketplace

Create a marketplace by giving data for a complete and valid marketplace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | the request object for create marketplace

try {
    $result = $apiInstance->createMarketplaceV1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->createMarketplaceV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| the request object for create marketplace |

### Return type

[**\Unifysell\SDK\Model\CreateMarketplaceResponse**](../Model/CreateMarketplaceResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketplace**
> \Unifysell\SDK\Model\MarketplaceResponse getMarketplace($id)

Show marketplace

Show a marketplace by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Marketplace ID

try {
    $result = $apiInstance->getMarketplace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->getMarketplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Marketplace ID |

### Return type

[**\Unifysell\SDK\Model\MarketplaceResponse**](../Model/MarketplaceResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketplaceV1**
> \Unifysell\SDK\Model\MarketplaceResponse getMarketplaceV1($id)

Show marketplace

Show a marketplace by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Marketplace ID

try {
    $result = $apiInstance->getMarketplaceV1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->getMarketplaceV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Marketplace ID |

### Return type

[**\Unifysell\SDK\Model\MarketplaceResponse**](../Model/MarketplaceResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMarketplaces**
> \Unifysell\SDK\Model\MarketplacesResponse listMarketplaces($page, $page_size)

List marketplaces

List all marketplaces

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listMarketplaces($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->listMarketplaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\MarketplacesResponse**](../Model/MarketplacesResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMarketplacesV1**
> \Unifysell\SDK\Model\MarketplacesResponse listMarketplacesV1($page, $page_size)

List marketplaces

List all marketplaces

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listMarketplacesV1($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->listMarketplacesV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\MarketplacesResponse**](../Model/MarketplacesResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMarketplace**
> \Unifysell\SDK\Model\UpdateMarketplaceResponse updateMarketplace($body, $id)

update a marketplace

Update a marketplace by giving an id and data to be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | the request object for update marketplace
$id = 56; // int | Marketplace ID

try {
    $result = $apiInstance->updateMarketplace($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->updateMarketplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| the request object for update marketplace |
 **id** | **int**| Marketplace ID |

### Return type

[**\Unifysell\SDK\Model\UpdateMarketplaceResponse**](../Model/UpdateMarketplaceResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMarketplaceV1**
> \Unifysell\SDK\Model\UpdateMarketplaceResponse updateMarketplaceV1($body, $id)

update a marketplace

Update a marketplace by giving an id and data to be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | the request object for update marketplace
$id = 56; // int | Marketplace ID

try {
    $result = $apiInstance->updateMarketplaceV1($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->updateMarketplaceV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| the request object for update marketplace |
 **id** | **int**| Marketplace ID |

### Return type

[**\Unifysell\SDK\Model\UpdateMarketplaceResponse**](../Model/UpdateMarketplaceResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

