# Swagger\Client\NewsletterApi

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmNewsletter**](NewsletterApi.md#confirmnewsletter) | **POST** /newsletter/confirm | Confirm a newsletter registration
[**subscribeToNewsletter**](NewsletterApi.md#subscribetonewsletter) | **POST** /newsletter/subscribe | Create or remove a newsletter subscription
[**unsubscribeToNewsletter**](NewsletterApi.md#unsubscribetonewsletter) | **POST** /newsletter/unsubscribe | Remove a newsletter subscription

# **confirmNewsletter**
> confirmNewsletter($body, $content_type, $accept)

Confirm a newsletter registration

You have to use the hash from the link sent out via email to confirm the user registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewsletterConfirmBody(); // \Swagger\Client\Model\NewsletterConfirmBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->confirmNewsletter($body, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->confirmNewsletter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewsletterConfirmBody**](../Model/NewsletterConfirmBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribeToNewsletter**
> subscribeToNewsletter($body, $content_type, $accept)

Create or remove a newsletter subscription

This route is used to create/remove/confirm a newsletter subscription.  The `option` property controls what should happen: * `direct`: The subscription is directly active and does not need a confirmation. * `subscribe`: An email will be send to the provided email addrees containing a link to the /newsletter/confirm route. The subscription is only successful, if the /newsletter/confirm route is called with the generated hashes. * `unsubscribe`: The email address will be removed from the newsletter subscriptions. * `confirmSubscribe`: Confirmes the newsletter subscription for the provided email address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewsletterSubscribeBody(); // \Swagger\Client\Model\NewsletterSubscribeBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->subscribeToNewsletter($body, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->subscribeToNewsletter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewsletterSubscribeBody**](../Model/NewsletterSubscribeBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribeToNewsletter**
> unsubscribeToNewsletter($body, $content_type, $accept)

Remove a newsletter subscription

Removes a newsletter recipient from the mailing lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewsletterUnsubscribeBody(); // \Swagger\Client\Model\NewsletterUnsubscribeBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->unsubscribeToNewsletter($body, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->unsubscribeToNewsletter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewsletterUnsubscribeBody**](../Model/NewsletterUnsubscribeBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

