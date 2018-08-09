# Unifysell\SDK\ListingsApi

All URIs are relative to *https://testing.api.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createListing**](ListingsApi.md#createListing) | **POST** /api/listing | create a new listing
[**createListingV1**](ListingsApi.md#createListingV1) | **POST** /api/v1/listing | create a new listing
[**getListing**](ListingsApi.md#getListing) | **GET** /api/listing/{id} | Show listing
[**getListingV1**](ListingsApi.md#getListingV1) | **GET** /api/v1/listing/{id} | Show listing
[**listListings**](ListingsApi.md#listListings) | **GET** /api/listing | List listings
[**listListingsV1**](ListingsApi.md#listListingsV1) | **GET** /api/v1/listing | List listings
[**updateListing**](ListingsApi.md#updateListing) | **PATCH** /api/listing | update a listing
[**updateListingV1**](ListingsApi.md#updateListingV1) | **PATCH** /api/v1/listing | update a listing


# **createListing**
> \Unifysell\SDK\Model\CreateListingResponse createListing($body)

create a new listing

Create a listing by giving data for a complete and valid listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Unifysell\SDK\Model\CreateListingRequest(); // \Unifysell\SDK\Model\CreateListingRequest | the request object for create listing

try {
    $result = $apiInstance->createListing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->createListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Unifysell\SDK\Model\CreateListingRequest**](../Model/CreateListingRequest.md)| the request object for create listing |

### Return type

[**\Unifysell\SDK\Model\CreateListingResponse**](../Model/CreateListingResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createListingV1**
> \Unifysell\SDK\Model\CreateListingResponse createListingV1($body)

create a new listing

Create a listing by giving data for a complete and valid listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Unifysell\SDK\Model\CreateListingRequest(); // \Unifysell\SDK\Model\CreateListingRequest | the request object for create listing

try {
    $result = $apiInstance->createListingV1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->createListingV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Unifysell\SDK\Model\CreateListingRequest**](../Model/CreateListingRequest.md)| the request object for create listing |

### Return type

[**\Unifysell\SDK\Model\CreateListingResponse**](../Model/CreateListingResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListing**
> \Unifysell\SDK\Model\ListingResponse getListing($id)

Show listing

Show a listing by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Listing ID

try {
    $result = $apiInstance->getListing($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Listing ID |

### Return type

[**\Unifysell\SDK\Model\ListingResponse**](../Model/ListingResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingV1**
> \Unifysell\SDK\Model\ListingResponse getListingV1($id)

Show listing

Show a listing by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Listing ID

try {
    $result = $apiInstance->getListingV1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Listing ID |

### Return type

[**\Unifysell\SDK\Model\ListingResponse**](../Model/ListingResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listListings**
> \Unifysell\SDK\Model\ListingsResponse listListings($page, $page_size)

List listings

List all listings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listListings($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listListings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\ListingsResponse**](../Model/ListingsResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listListingsV1**
> \Unifysell\SDK\Model\ListingsResponse listListingsV1($page, $page_size)

List listings

List all listings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listListingsV1($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listListingsV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\ListingsResponse**](../Model/ListingsResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateListing**
> \Unifysell\SDK\Model\UpdateListingResponse updateListing($id, $body)

update a listing

Update a listing by giving an id and data to be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Listing ID
$body = new \Unifysell\SDK\Model\UpdateListingRequest(); // \Unifysell\SDK\Model\UpdateListingRequest | the request object for update listing

try {
    $result = $apiInstance->updateListing($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->updateListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Listing ID |
 **body** | [**\Unifysell\SDK\Model\UpdateListingRequest**](../Model/UpdateListingRequest.md)| the request object for update listing |

### Return type

[**\Unifysell\SDK\Model\UpdateListingResponse**](../Model/UpdateListingResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateListingV1**
> \Unifysell\SDK\Model\UpdateListingResponse updateListingV1($id, $body)

update a listing

Update a listing by giving an id and data to be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Listing ID
$body = new \Unifysell\SDK\Model\UpdateListingRequest(); // \Unifysell\SDK\Model\UpdateListingRequest | the request object for update listing

try {
    $result = $apiInstance->updateListingV1($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->updateListingV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Listing ID |
 **body** | [**\Unifysell\SDK\Model\UpdateListingRequest**](../Model/UpdateListingRequest.md)| the request object for update listing |

### Return type

[**\Unifysell\SDK\Model\UpdateListingResponse**](../Model/UpdateListingResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

