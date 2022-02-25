# Swagger\Client\ContentApi

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**readCms**](ContentApi.md#readcms) | **POST** /cms/{id} | Fetch and resolve a CMS page
[**readLandingPage**](ContentApi.md#readlandingpage) | **POST** /landing-page/{landingPageId} | Fetch a landing page with the resolved CMS page
[**sendContactMail**](ContentApi.md#sendcontactmail) | **POST** /contact-form | Submit a contact form message

# **readCms**
> \Swagger\Client\Model\CmsPage readCms($content_type, $accept, $id, $body)

Fetch and resolve a CMS page

Loads a content management page by its identifier and resolve the slot data. This could be media files, product listing and so on.  **Important notice**  The criteria passed with this route also affects the listing, if there is one within the cms page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$id = "id_example"; // string | Identifier of the CMS page to be resolved
$body = new \Swagger\Client\Model\CmsIdBody(); // \Swagger\Client\Model\CmsIdBody | 

try {
    $result = $apiInstance->readCms($content_type, $accept, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->readCms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **id** | **string**| Identifier of the CMS page to be resolved |
 **body** | [**\Swagger\Client\Model\CmsIdBody**](../Model/CmsIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CmsPage**](../Model/CmsPage.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readLandingPage**
> \Swagger\Client\Model\LandingPage readLandingPage($content_type, $accept, $landing_page_id, $body)

Fetch a landing page with the resolved CMS page

Loads a landing page by its identifier and resolves the CMS page.  **Important notice**  The criteria passed with this route also affects the listing, if there is one within the cms page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$landing_page_id = "landing_page_id_example"; // string | Identifier of the landing page.
$body = new \Swagger\Client\Model\LandingpageLandingPageIdBody(); // \Swagger\Client\Model\LandingpageLandingPageIdBody | 

try {
    $result = $apiInstance->readLandingPage($content_type, $accept, $landing_page_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->readLandingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **landing_page_id** | **string**| Identifier of the landing page. |
 **body** | [**\Swagger\Client\Model\LandingpageLandingPageIdBody**](../Model/LandingpageLandingPageIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LandingPage**](../Model/LandingPage.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendContactMail**
> sendContactMail($body, $content_type, $accept)

Submit a contact form message

Used for submitting contact forms. Be aware that there can be more required fields, depending on the system settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactformBody(); // \Swagger\Client\Model\ContactformBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->sendContactMail($body, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sendContactMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactformBody**](../Model/ContactformBody.md)|  |
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

