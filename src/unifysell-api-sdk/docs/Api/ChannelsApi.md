# Unifysell\SDK\ChannelsApi

All URIs are relative to *https://testing.api.unifysell.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChannel**](ChannelsApi.md#createChannel) | **POST** /api/channel | create a new channel
[**createChannelV1**](ChannelsApi.md#createChannelV1) | **POST** /api/v1/channel | create a new channel
[**getChannel**](ChannelsApi.md#getChannel) | **GET** /api/channel/{id} | Show channel
[**getChannelV1**](ChannelsApi.md#getChannelV1) | **GET** /api/v1/channel/{id} | Show channel
[**listChannels**](ChannelsApi.md#listChannels) | **GET** /api/channel | List channels
[**listChannelsV1**](ChannelsApi.md#listChannelsV1) | **GET** /api/v1/channel | List channels
[**updateChannel**](ChannelsApi.md#updateChannel) | **PATCH** /api/channel | update a channel
[**updateChannelV1**](ChannelsApi.md#updateChannelV1) | **PATCH** /api/v1/channel | update a channel


# **createChannel**
> \Unifysell\SDK\Model\CreateChannelResponse createChannel($body)

create a new channel

Create a channel by giving data for a complete and valid channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Unifysell\SDK\Model\CreateChannelRequest(); // \Unifysell\SDK\Model\CreateChannelRequest | the request object for create channel

try {
    $result = $apiInstance->createChannel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->createChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Unifysell\SDK\Model\CreateChannelRequest**](../Model/CreateChannelRequest.md)| the request object for create channel |

### Return type

[**\Unifysell\SDK\Model\CreateChannelResponse**](../Model/CreateChannelResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createChannelV1**
> \Unifysell\SDK\Model\CreateChannelResponse createChannelV1($body)

create a new channel

Create a channel by giving data for a complete and valid channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Unifysell\SDK\Model\CreateChannelRequest(); // \Unifysell\SDK\Model\CreateChannelRequest | the request object for create channel

try {
    $result = $apiInstance->createChannelV1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->createChannelV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Unifysell\SDK\Model\CreateChannelRequest**](../Model/CreateChannelRequest.md)| the request object for create channel |

### Return type

[**\Unifysell\SDK\Model\CreateChannelResponse**](../Model/CreateChannelResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannel**
> \Unifysell\SDK\Model\ChannelResponse getChannel($id)

Show channel

Show a channel by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Channel ID

try {
    $result = $apiInstance->getChannel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Channel ID |

### Return type

[**\Unifysell\SDK\Model\ChannelResponse**](../Model/ChannelResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelV1**
> \Unifysell\SDK\Model\ChannelResponse getChannelV1($id)

Show channel

Show a channel by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Channel ID

try {
    $result = $apiInstance->getChannelV1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Channel ID |

### Return type

[**\Unifysell\SDK\Model\ChannelResponse**](../Model/ChannelResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listChannels**
> \Unifysell\SDK\Model\ChannelsResponse listChannels($page, $page_size)

List channels

List all channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listChannels($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->listChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\ChannelsResponse**](../Model/ChannelsResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listChannelsV1**
> \Unifysell\SDK\Model\ChannelsResponse listChannelsV1($page, $page_size)

List channels

List all channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page number.
$page_size = 56; // int | The number of elements per page.

try {
    $result = $apiInstance->listChannelsV1($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->listChannelsV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number. | [optional]
 **page_size** | **int**| The number of elements per page. | [optional]

### Return type

[**\Unifysell\SDK\Model\ChannelsResponse**](../Model/ChannelsResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannel**
> \Unifysell\SDK\Model\UpdateChannelResponse updateChannel($id, $body)

update a channel

Update a channel by giving an id and data to be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Channel ID
$body = new \Unifysell\SDK\Model\UpdateChannelRequest(); // \Unifysell\SDK\Model\UpdateChannelRequest | the request object for update channel

try {
    $result = $apiInstance->updateChannel($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->updateChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Channel ID |
 **body** | [**\Unifysell\SDK\Model\UpdateChannelRequest**](../Model/UpdateChannelRequest.md)| the request object for update channel |

### Return type

[**\Unifysell\SDK\Model\UpdateChannelResponse**](../Model/UpdateChannelResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannelV1**
> \Unifysell\SDK\Model\UpdateChannelResponse updateChannelV1($id, $body)

update a channel

Update a channel by giving an id and data to be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: OAuthBearer2xx
$config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Unifysell\SDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Unifysell\SDK\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Channel ID
$body = new \Unifysell\SDK\Model\UpdateChannelRequest(); // \Unifysell\SDK\Model\UpdateChannelRequest | the request object for update channel

try {
    $result = $apiInstance->updateChannelV1($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->updateChannelV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Channel ID |
 **body** | [**\Unifysell\SDK\Model\UpdateChannelRequest**](../Model/UpdateChannelRequest.md)| the request object for update channel |

### Return type

[**\Unifysell\SDK\Model\UpdateChannelResponse**](../Model/UpdateChannelResponse.md)

### Authorization

[OAuthBearer2xx](../../README.md#OAuthBearer2xx)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

