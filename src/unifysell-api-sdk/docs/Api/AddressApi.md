# Unifysell\SDK\AddressApi

All URIs are relative to *https://testing.api.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddress**](AddressApi.md#getAddress) | **GET** /api/address/{id} | Show address
[**getAddressV1**](AddressApi.md#getAddressV1) | **GET** /api/v1/address/{id} | Show address
[**listAddresses**](AddressApi.md#listAddresses) | **GET** /api/address | List addresses
[**listAddressesV1**](AddressApi.md#listAddressesV1) | **GET** /api/v1/address | List addresses


# **getAddress**
> \Unifysell\SDK\Model\AddressResponse getAddress($id)

Show address

Show an address by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Address ID

try {
    $result = $apiInstance->getAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->getAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Address ID |

### Return type

[**\Unifysell\SDK\Model\AddressResponse**](../Model/AddressResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressV1**
> \Unifysell\SDK\Model\AddressResponse getAddressV1($id)

Show address

Show an address by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Address ID

try {
    $result = $apiInstance->getAddressV1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->getAddressV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Address ID |

### Return type

[**\Unifysell\SDK\Model\AddressResponse**](../Model/AddressResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAddresses**
> \Unifysell\SDK\Model\AddressesResponse listAddresses($page, $page_size)

List addresses

List all addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listAddresses($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->listAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\AddressesResponse**](../Model/AddressesResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAddressesV1**
> \Unifysell\SDK\Model\AddressesResponse listAddressesV1($page, $page_size)

List addresses

List all addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listAddressesV1($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->listAddressesV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\AddressesResponse**](../Model/AddressesResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

