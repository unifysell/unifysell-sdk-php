# Unifysell\SDK\OrdersApi

All URIs are relative to *https://testing.api.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrder**](OrdersApi.md#getOrder) | **GET** /api/order/{id} | Show order
[**getOrderV0**](OrdersApi.md#getOrderV0) | **GET** /api/v0/order/{id} | Show order
[**getOrderV1**](OrdersApi.md#getOrderV1) | **GET** /api/v1/order/{id} | Show order
[**listOrders**](OrdersApi.md#listOrders) | **GET** /api/order | List orders
[**listOrdersV0**](OrdersApi.md#listOrdersV0) | **GET** /api/v0/order | List orders
[**listOrdersV1**](OrdersApi.md#listOrdersV1) | **GET** /api/v1/order | List orders
[**markOrderAsShipped**](OrdersApi.md#markOrderAsShipped) | **PUT** /api/order/{order_id}/mark-as-shipped | Mark a given order as shipped
[**markOrderAsShippedPatch**](OrdersApi.md#markOrderAsShippedPatch) | **PATCH** /api/order/{order_id}/mark-as-shipped | Mark a given order as shipped
[**markOrderAsShippedPatchV0**](OrdersApi.md#markOrderAsShippedPatchV0) | **PATCH** /api/v0/order/{order_id}/mark-as-shipped | Mark a given order as shipped
[**markOrderAsShippedPatchV1**](OrdersApi.md#markOrderAsShippedPatchV1) | **PATCH** /api/v1/order/{order_id}/mark-as-shipped | Mark a given order as shipped
[**markOrderAsShippedV0**](OrdersApi.md#markOrderAsShippedV0) | **PUT** /api/v0/order/{order_id}/mark-as-shipped | Mark a given order as shipped
[**markOrderAsShippedV1**](OrdersApi.md#markOrderAsShippedV1) | **PUT** /api/v1/order/{order_id}/mark-as-shipped | Mark a given order as shipped


# **getOrder**
> \Unifysell\SDK\Model\OrderResponse getOrder($id)

Show order

Show an order by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order ID

try {
    $result = $apiInstance->getOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderV0**
> \Unifysell\SDK\Model\OrderResponse getOrderV0($id)

Show order

Show an order by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order ID

try {
    $result = $apiInstance->getOrderV0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderV1**
> \Unifysell\SDK\Model\OrderResponse getOrderV1($id)

Show order

Show an order by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order ID

try {
    $result = $apiInstance->getOrderV1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrders**
> \Unifysell\SDK\Model\OrdersResponse listOrders($page, $page_size)

List orders

List all orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listOrders($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrdersV0**
> \Unifysell\SDK\Model\OrdersResponse listOrdersV0($page, $page_size)

List orders

List all orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listOrdersV0($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrdersV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrdersV1**
> \Unifysell\SDK\Model\OrdersResponse listOrdersV1($page, $page_size)

List orders

List all orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listOrdersV1($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrdersV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsShipped**
> \Unifysell\SDK\Model\OrderMarkAsShippedResponse markOrderAsShipped($order_id, $body)

Mark a given order as shipped

Give an order id. The associated order will be marked as shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID
$body = new \Unifysell\SDK\Model\OrderMarkAsShippedRequest(); // \Unifysell\SDK\Model\OrderMarkAsShippedRequest | the request object for order mark-as-shipped

try {
    $result = $apiInstance->markOrderAsShipped($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsShipped: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |
 **body** | [**\Unifysell\SDK\Model\OrderMarkAsShippedRequest**](../Model/OrderMarkAsShippedRequest.md)| the request object for order mark-as-shipped | [optional]

### Return type

[**\Unifysell\SDK\Model\OrderMarkAsShippedResponse**](../Model/OrderMarkAsShippedResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsShippedPatch**
> \Unifysell\SDK\Model\OrderMarkAsShippedResponse markOrderAsShippedPatch($order_id, $body)

Mark a given order as shipped

Give an order id. The associated order will be marked as shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID
$body = new \Unifysell\SDK\Model\OrderMarkAsShippedRequest(); // \Unifysell\SDK\Model\OrderMarkAsShippedRequest | the request object for order mark-as-shipped

try {
    $result = $apiInstance->markOrderAsShippedPatch($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsShippedPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |
 **body** | [**\Unifysell\SDK\Model\OrderMarkAsShippedRequest**](../Model/OrderMarkAsShippedRequest.md)| the request object for order mark-as-shipped | [optional]

### Return type

[**\Unifysell\SDK\Model\OrderMarkAsShippedResponse**](../Model/OrderMarkAsShippedResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsShippedPatchV0**
> \Unifysell\SDK\Model\OrderMarkAsShippedResponse markOrderAsShippedPatchV0($order_id, $body)

Mark a given order as shipped

Give an order id. The associated order will be marked as shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID
$body = new \Unifysell\SDK\Model\OrderMarkAsShippedRequest(); // \Unifysell\SDK\Model\OrderMarkAsShippedRequest | the request object for order mark-as-shipped

try {
    $result = $apiInstance->markOrderAsShippedPatchV0($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsShippedPatchV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |
 **body** | [**\Unifysell\SDK\Model\OrderMarkAsShippedRequest**](../Model/OrderMarkAsShippedRequest.md)| the request object for order mark-as-shipped | [optional]

### Return type

[**\Unifysell\SDK\Model\OrderMarkAsShippedResponse**](../Model/OrderMarkAsShippedResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsShippedPatchV1**
> \Unifysell\SDK\Model\OrderMarkAsShippedResponse markOrderAsShippedPatchV1($order_id, $body)

Mark a given order as shipped

Give an order id. The associated order will be marked as shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID
$body = new \Unifysell\SDK\Model\OrderMarkAsShippedRequest(); // \Unifysell\SDK\Model\OrderMarkAsShippedRequest | the request object for order mark-as-shipped

try {
    $result = $apiInstance->markOrderAsShippedPatchV1($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsShippedPatchV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |
 **body** | [**\Unifysell\SDK\Model\OrderMarkAsShippedRequest**](../Model/OrderMarkAsShippedRequest.md)| the request object for order mark-as-shipped | [optional]

### Return type

[**\Unifysell\SDK\Model\OrderMarkAsShippedResponse**](../Model/OrderMarkAsShippedResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsShippedV0**
> \Unifysell\SDK\Model\OrderMarkAsShippedResponse markOrderAsShippedV0($order_id, $body)

Mark a given order as shipped

Give an order id. The associated order will be marked as shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID
$body = new \Unifysell\SDK\Model\OrderMarkAsShippedRequest(); // \Unifysell\SDK\Model\OrderMarkAsShippedRequest | the request object for order mark-as-shipped

try {
    $result = $apiInstance->markOrderAsShippedV0($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsShippedV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |
 **body** | [**\Unifysell\SDK\Model\OrderMarkAsShippedRequest**](../Model/OrderMarkAsShippedRequest.md)| the request object for order mark-as-shipped | [optional]

### Return type

[**\Unifysell\SDK\Model\OrderMarkAsShippedResponse**](../Model/OrderMarkAsShippedResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsShippedV1**
> \Unifysell\SDK\Model\OrderMarkAsShippedResponse markOrderAsShippedV1($order_id, $body)

Mark a given order as shipped

Give an order id. The associated order will be marked as shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID
$body = new \Unifysell\SDK\Model\OrderMarkAsShippedRequest(); // \Unifysell\SDK\Model\OrderMarkAsShippedRequest | the request object for order mark-as-shipped

try {
    $result = $apiInstance->markOrderAsShippedV1($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsShippedV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |
 **body** | [**\Unifysell\SDK\Model\OrderMarkAsShippedRequest**](../Model/OrderMarkAsShippedRequest.md)| the request object for order mark-as-shipped | [optional]

### Return type

[**\Unifysell\SDK\Model\OrderMarkAsShippedResponse**](../Model/OrderMarkAsShippedResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

