# Unifysell\SDK\BuyerApi

All URIs are relative to *https://testing.api.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBuyer**](BuyerApi.md#getBuyer) | **GET** /api/buyer/{id} | Show buyer
[**getBuyerV1**](BuyerApi.md#getBuyerV1) | **GET** /api/v1/buyer/{id} | Show buyer
[**listBuyers**](BuyerApi.md#listBuyers) | **GET** /api/buyer | List buyers
[**listBuyersV1**](BuyerApi.md#listBuyersV1) | **GET** /api/v1/buyer | List buyers


# **getBuyer**
> \Unifysell\SDK\Model\BuyerResponse getBuyer($id)

Show buyer

Show a buyer by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Buyer ID

try {
    $result = $apiInstance->getBuyer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Buyer ID |

### Return type

[**\Unifysell\SDK\Model\BuyerResponse**](../Model/BuyerResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuyerV1**
> \Unifysell\SDK\Model\BuyerResponse getBuyerV1($id)

Show buyer

Show a buyer by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Buyer ID

try {
    $result = $apiInstance->getBuyerV1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Buyer ID |

### Return type

[**\Unifysell\SDK\Model\BuyerResponse**](../Model/BuyerResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBuyers**
> \Unifysell\SDK\Model\BuyersResponse listBuyers($page, $page_size)

List buyers

List all buyers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listBuyers($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\BuyersResponse**](../Model/BuyersResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBuyersV1**
> \Unifysell\SDK\Model\BuyersResponse listBuyersV1($page, $page_size)

List buyers

List all buyers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listBuyersV1($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyersV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\BuyersResponse**](../Model/BuyersResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

