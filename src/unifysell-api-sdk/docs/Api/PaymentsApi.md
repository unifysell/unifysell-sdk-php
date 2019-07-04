# Unifysell\SDK\PaymentsApi

All URIs are relative to *https://api.staging.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentV1**](PaymentsApi.md#getpaymentv1) | **GET** /api/payment/{id} | Show payment
[**getPaymentV1_0**](PaymentsApi.md#getpaymentv1_0) | **GET** /api/v0/payment/{id} | Show payment
[**getPaymentV1_1**](PaymentsApi.md#getpaymentv1_1) | **GET** /api/v1/payment/{id} | Show payment
[**listPaymentsV0**](PaymentsApi.md#listpaymentsv0) | **GET** /api/v0/payment | List payments
[**listPaymentsV1**](PaymentsApi.md#listpaymentsv1) | **GET** /api/payment | List payments
[**listPaymentsV1_0**](PaymentsApi.md#listpaymentsv1_0) | **GET** /api/v1/payment | List payments

# **getPaymentV1**
> \Unifysell\SDK\Model\V1PaymentResponse getPaymentV1($id)

Show payment

Show an payment by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Payment ID

try {
    $result = $apiInstance->getPaymentV1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Payment ID |

### Return type

[**\Unifysell\SDK\Model\V1PaymentResponse**](../Model/V1PaymentResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentV1_0**
> \Unifysell\SDK\Model\V0PaymentResponse getPaymentV1_0($id)

Show payment

Show an payment by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Payment ID

try {
    $result = $apiInstance->getPaymentV1_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentV1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Payment ID |

### Return type

[**\Unifysell\SDK\Model\V0PaymentResponse**](../Model/V0PaymentResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentV1_1**
> \Unifysell\SDK\Model\V1PaymentResponse getPaymentV1_1($id)

Show payment

Show an payment by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Payment ID

try {
    $result = $apiInstance->getPaymentV1_1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentV1_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Payment ID |

### Return type

[**\Unifysell\SDK\Model\V1PaymentResponse**](../Model/V1PaymentResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPaymentsV0**
> \Unifysell\SDK\Model\V0PaymentsResponse listPaymentsV0()

List payments

List all payments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPaymentsV0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->listPaymentsV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Unifysell\SDK\Model\V0PaymentsResponse**](../Model/V0PaymentsResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPaymentsV1**
> \Unifysell\SDK\Model\V1PaymentsResponse listPaymentsV1($page_number, $page_size)

List payments

List all payments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 56; // int | The requested page number. Defaults to 1.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listPaymentsV1($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->listPaymentsV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| The requested page number. Defaults to 1. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\V1PaymentsResponse**](../Model/V1PaymentsResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPaymentsV1_0**
> \Unifysell\SDK\Model\V1PaymentsResponse listPaymentsV1_0($page_number, $page_size)

List payments

List all payments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 56; // int | The requested page number. Defaults to 1.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listPaymentsV1_0($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->listPaymentsV1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| The requested page number. Defaults to 1. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\V1PaymentsResponse**](../Model/V1PaymentsResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

