# Swagger\Client\CategoryApi

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**readCategory**](CategoryApi.md#readcategory) | **POST** /category/{categoryId} | Fetch a single category
[**readCategoryList**](CategoryApi.md#readcategorylist) | **POST** /category | Fetch a list of categories
[**readNavigation**](CategoryApi.md#readnavigation) | **POST** /navigation/{requestActiveId}/{requestRootId} | Fetch a navigation menu

# **readCategory**
> \Swagger\Client\Model\Category readCategory($content_type, $accept, $category_id, $body, $slots)

Fetch a single category

This endpoint returns information about the category, as well as a fully resolved (hydrated with mapping values) CMS page, if one is assigned to the category. You can pass slots which should be resolved exclusively.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$category_id = "category_id_example"; // string | Identifier of the category to be fetched
$body = new \Swagger\Client\Model\CategoryCategoryIdBody(); // \Swagger\Client\Model\CategoryCategoryIdBody | 
$slots = "slots_example"; // string | Resolves only the given slot identifiers. The identifiers have to be seperated by a '|' character

try {
    $result = $apiInstance->readCategory($content_type, $accept, $category_id, $body, $slots);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->readCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **category_id** | **string**| Identifier of the category to be fetched |
 **body** | [**\Swagger\Client\Model\CategoryCategoryIdBody**](../Model/CategoryCategoryIdBody.md)|  | [optional]
 **slots** | **string**| Resolves only the given slot identifiers. The identifiers have to be seperated by a &#x27;|&#x27; character | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readCategoryList**
> \Swagger\Client\Model\InlineResponse2002 readCategoryList($content_type, $accept, $body)

Fetch a list of categories

Perform a filtered search for categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\CategoryBody(); // \Swagger\Client\Model\CategoryBody | 

try {
    $result = $apiInstance->readCategoryList($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->readCategoryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\CategoryBody**](../Model/CategoryBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNavigation**
> \Swagger\Client\Model\NavigationRouteResponse readNavigation($body, $content_type, $accept, $request_active_id, $request_root_id, $sw_include_seo_urls)

Fetch a navigation menu

This endpoint returns categories that can be used as a page navigation. You can either return them as a tree or as a flat list. You can also control the depth of the tree.      Instead of passing uuids, you can also use one of the following aliases for the activeId and rootId parameters to get the respective navigations of your sales channel.       * main-navigation      * service-navigation      * footer-navigation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestActiveIdRequestRootIdBody(); // \Swagger\Client\Model\RequestActiveIdRequestRootIdBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$request_active_id = "request_active_id_example"; // string | Identifier of the active category in the navigation tree (if not used, just set to the same as rootId).
$request_root_id = "request_root_id_example"; // string | Identifier of the root category for your desired navigation tree. You can use it to fetch sub-trees of your navigation tree.
$sw_include_seo_urls = true; // bool | Instructs Shopware to try and resolve SEO URLs for the given navigation item

try {
    $result = $apiInstance->readNavigation($body, $content_type, $accept, $request_active_id, $request_root_id, $sw_include_seo_urls);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->readNavigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestActiveIdRequestRootIdBody**](../Model/RequestActiveIdRequestRootIdBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **request_active_id** | **string**| Identifier of the active category in the navigation tree (if not used, just set to the same as rootId). |
 **request_root_id** | **string**| Identifier of the root category for your desired navigation tree. You can use it to fetch sub-trees of your navigation tree. |
 **sw_include_seo_urls** | **bool**| Instructs Shopware to try and resolve SEO URLs for the given navigation item | [optional]

### Return type

[**\Swagger\Client\Model\NavigationRouteResponse**](../Model/NavigationRouteResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

