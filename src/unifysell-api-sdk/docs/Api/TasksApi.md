# Unifysell\SDK\TasksApi

All URIs are relative to *https://testing.api.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTask**](TasksApi.md#getTask) | **GET** /api/task/{id} | Show a task
[**getTaskV0**](TasksApi.md#getTaskV0) | **GET** /api/v0/task/{id} | Show a task
[**getTaskV1**](TasksApi.md#getTaskV1) | **GET** /api/v1/task/{id} | Show a task
[**listTasks**](TasksApi.md#listTasks) | **GET** /api/task | List my tasks
[**listTasksV0**](TasksApi.md#listTasksV0) | **GET** /api/v0/task | List my tasks
[**listTasksV1**](TasksApi.md#listTasksV1) | **GET** /api/v1/task | List my tasks


# **getTask**
> \Unifysell\SDK\Model\TaskResponse getTask($id)

Show a task

Show a task by an ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Task ID

try {
    $result = $apiInstance->getTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Task ID |

### Return type

[**\Unifysell\SDK\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskV0**
> \Unifysell\SDK\Model\TaskResponse getTaskV0($id)

Show a task

Show a task by an ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Task ID

try {
    $result = $apiInstance->getTaskV0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTaskV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Task ID |

### Return type

[**\Unifysell\SDK\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskV1**
> \Unifysell\SDK\Model\TaskResponse getTaskV1($id)

Show a task

Show a task by an ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Task ID

try {
    $result = $apiInstance->getTaskV1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTaskV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Task ID |

### Return type

[**\Unifysell\SDK\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTasks**
> \Unifysell\SDK\Model\TasksResponse listTasks($page, $page_size)

List my tasks

List all tasks that belong to me

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listTasks($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\TasksResponse**](../Model/TasksResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTasksV0**
> \Unifysell\SDK\Model\TasksResponse listTasksV0($page, $page_size)

List my tasks

List all tasks that belong to me

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listTasksV0($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listTasksV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\TasksResponse**](../Model/TasksResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTasksV1**
> \Unifysell\SDK\Model\TasksResponse listTasksV1($page, $page_size)

List my tasks

List all tasks that belong to me

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listTasksV1($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listTasksV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\TasksResponse**](../Model/TasksResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

