# Unifysell\SDK\OrdersApi

All URIs are relative to *https://testing.api.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrder**](OrdersApi.md#getorder) | **GET** /api/order/{id} | Show order
[**getOrderV0**](OrdersApi.md#getorderv0) | **GET** /api/v0/order/{id} | Show order
[**getOrderV1**](OrdersApi.md#getorderv1) | **GET** /api/v1/order/{id} | Show order
[**listOrders**](OrdersApi.md#listorders) | **GET** /api/order | List orders
[**listOrdersV0**](OrdersApi.md#listordersv0) | **GET** /api/v0/order | List orders
[**listOrdersV1**](OrdersApi.md#listordersv1) | **GET** /api/v1/order | List orders
[**markOrderAsAcknowledged**](OrdersApi.md#markorderasacknowledged) | **PATCH** /api/order/{order_id}/mark-as-acknowledged | Mark a given order as acknowledged.
[**markOrderAsAcknowledgedV1**](OrdersApi.md#markorderasacknowledgedv1) | **PATCH** /api/v1/order/{order_id}/mark-as-acknowledged | Mark a given order as acknowledged.
[**markOrderAsCanceled**](OrdersApi.md#markorderascanceled) | **PATCH** /api/order/{order_id}/mark-as-canceled | Mark a given order as canceled
[**markOrderAsCanceledV1**](OrdersApi.md#markorderascanceledv1) | **PATCH** /api/v1/order/{order_id}/mark-as-canceled | Mark a given order as canceled
[**markOrderAsNotAcknowledged**](OrdersApi.md#markorderasnotacknowledged) | **PATCH** /api/order/{order_id}/mark-as-not-acknowledged | Mark a given order as NOT acknowledged.
[**markOrderAsNotAcknowledgedV1**](OrdersApi.md#markorderasnotacknowledgedv1) | **PATCH** /api/v1/order/{order_id}/mark-as-not-acknowledged | Mark a given order as NOT acknowledged.
[**markOrderAsPaid**](OrdersApi.md#markorderaspaid) | **PATCH** /api/order/{order_id}/mark-as-paid | Mark a given order as paid.
[**markOrderAsPaidV1**](OrdersApi.md#markorderaspaidv1) | **PATCH** /api/v1/order/{order_id}/mark-as-paid | Mark a given order as paid.
[**markOrderAsRefund**](OrdersApi.md#markorderasrefund) | **PATCH** /api/order/{order_id}/mark-as-refund | Mark a given order as refund
[**markOrderAsRefundV1**](OrdersApi.md#markorderasrefundv1) | **PATCH** /api/v1/order/{order_id}/mark-as-refund | Mark a given order as refund
[**markOrderAsShipped**](OrdersApi.md#markorderasshipped) | **PATCH** /api/order/{order_id}/mark-as-shipped | Mark a given order as shipped
[**markOrderAsShippedV0**](OrdersApi.md#markorderasshippedv0) | **PATCH** /api/v0/order/{order_id}/mark-as-shipped | Mark a given order as shipped
[**markOrderAsShippedV1**](OrdersApi.md#markorderasshippedv1) | **PATCH** /api/v1/order/{order_id}/mark-as-shipped | Mark a given order as shipped

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

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

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

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

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

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

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

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

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

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

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

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsAcknowledged**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsAcknowledged($order_id)

Mark a given order as acknowledged.

Give an order id. The associated order will be marked as acknowledged. This action is possible for new amazon orders.

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

try {
    $result = $apiInstance->markOrderAsAcknowledged($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsAcknowledged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsAcknowledgedV1**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsAcknowledgedV1($order_id)

Mark a given order as acknowledged.

Give an order id. The associated order will be marked as acknowledged. This action is possible for new amazon orders.

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

try {
    $result = $apiInstance->markOrderAsAcknowledgedV1($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsAcknowledgedV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsCanceled**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsCanceled($order_id)

Mark a given order as canceled

Give an order id. The associated order will be marked as canceled.

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

try {
    $result = $apiInstance->markOrderAsCanceled($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsCanceled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsCanceledV1**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsCanceledV1($order_id)

Mark a given order as canceled

Give an order id. The associated order will be marked as canceled.

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

try {
    $result = $apiInstance->markOrderAsCanceledV1($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsCanceledV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsNotAcknowledged**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsNotAcknowledged($order_id)

Mark a given order as NOT acknowledged.

Give an order id. The associated order will be marked as NOT acknowledged. This is needed for new amazon orders that you want to reject.

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

try {
    $result = $apiInstance->markOrderAsNotAcknowledged($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsNotAcknowledged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsNotAcknowledgedV1**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsNotAcknowledgedV1($order_id)

Mark a given order as NOT acknowledged.

Give an order id. The associated order will be marked as NOT acknowledged. This is needed for new amazon orders that you want to reject.

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

try {
    $result = $apiInstance->markOrderAsNotAcknowledgedV1($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsNotAcknowledgedV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsPaid**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsPaid($order_id)

Mark a given order as paid.

Give an order id. The associated order will be marked as paid.

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

try {
    $result = $apiInstance->markOrderAsPaid($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsPaid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsPaidV1**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsPaidV1($order_id)

Mark a given order as paid.

Give an order id. The associated order will be marked as paid.

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

try {
    $result = $apiInstance->markOrderAsPaidV1($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsPaidV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsRefund**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsRefund($order_id)

Mark a given order as refund

Give an order id. The associated order will be marked as refund.

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

try {
    $result = $apiInstance->markOrderAsRefund($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsRefundV1**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsRefundV1($order_id)

Mark a given order as refund

Give an order id. The associated order will be marked as refund.

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

try {
    $result = $apiInstance->markOrderAsRefundV1($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->markOrderAsRefundV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsShipped**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsShipped($order_id, $body)

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

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsShippedV0**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsShippedV0($order_id, $body)

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

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markOrderAsShippedV1**
> \Unifysell\SDK\Model\UpdateOrderResponse markOrderAsShippedV1($order_id, $body)

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

[**\Unifysell\SDK\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

