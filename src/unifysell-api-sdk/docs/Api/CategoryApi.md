# Unifysell\SDK\CategoryApi

All URIs are relative to *https://testing.api.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategory**](CategoryApi.md#getcategory) | **GET** /api/category/{id} | Show category
[**getCategoryV1**](CategoryApi.md#getcategoryv1) | **GET** /api/v1/category/{id} | Show category
[**listCategories**](CategoryApi.md#listcategories) | **GET** /api/category | List categories
[**listCategoriesV1**](CategoryApi.md#listcategoriesv1) | **GET** /api/v1/category | List categories

# **getCategory**
> \Unifysell\SDK\Model\CategoryResponse getCategory($id)

Show category

Show a category by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Category ID

try {
    $result = $apiInstance->getCategory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Category ID |

### Return type

[**\Unifysell\SDK\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoryV1**
> \Unifysell\SDK\Model\CategoryResponse getCategoryV1($id)

Show category

Show a category by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Category ID

try {
    $result = $apiInstance->getCategoryV1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->getCategoryV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Category ID |

### Return type

[**\Unifysell\SDK\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCategories**
> \Unifysell\SDK\Model\CategoriesResponse listCategories($marketplace_id, $page, $page_size)

List categories

List all categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 56; // int | A marketplace to filter categories by.
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listCategories($marketplace_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->listCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **int**| A marketplace to filter categories by. | [optional]
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\CategoriesResponse**](../Model/CategoriesResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCategoriesV1**
> \Unifysell\SDK\Model\CategoriesResponse listCategoriesV1($marketplace_id, $page, $page_size)

List categories

List all categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 56; // int | A marketplace to filter categories by.
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listCategoriesV1($marketplace_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->listCategoriesV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **int**| A marketplace to filter categories by. | [optional]
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\CategoriesResponse**](../Model/CategoriesResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx), [OAuthBearer300](../../README.md#OAuthBearer300)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

