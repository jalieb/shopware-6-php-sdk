# Swagger\Client\WishlistApi

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductOnWishlist**](WishlistApi.md#addproductonwishlist) | **POST** /customer/wishlist/add/{productId} | Add a product to a wishlist
[**deleteProductOnWishlist**](WishlistApi.md#deleteproductonwishlist) | **DELETE** /customer/wishlist/delete/{productId} | Remove a product from a wishlist
[**mergeProductOnWishlist**](WishlistApi.md#mergeproductonwishlist) | **POST** /customer/wishlist/merge | Create a wishlist for a customer
[**readCustomerWishlist**](WishlistApi.md#readcustomerwishlist) | **POST** /customer/wishlist | Fetch a wishlist

# **addProductOnWishlist**
> \Swagger\Client\Model\SuccessResponse addProductOnWishlist($product_id, $content_type, $accept)

Add a product to a wishlist

Adds a product to a customers wishlist.  **Important constraints**  * Anonymous (not logged-in) customers can not have wishlists. * The wishlist feature has to be activated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');// Configure API key authorization: ContextToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = "product_id_example"; // string | Identifier of the product to be added.
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->addProductOnWishlist($product_id, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->addProductOnWishlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| Identifier of the product to be added. |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductOnWishlist**
> \Swagger\Client\Model\SuccessResponse deleteProductOnWishlist($product_id, $content_type, $accept)

Remove a product from a wishlist

Removes a product from a customer's wishlist.  **Important constraints**  * Anonymous (not logged-in) customers can not have wishlists. * The wishlist feature has to be activated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');// Configure API key authorization: ContextToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = "product_id_example"; // string | The identifier of the product to be removed from the wishlist.
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->deleteProductOnWishlist($product_id, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->deleteProductOnWishlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| The identifier of the product to be removed from the wishlist. |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeProductOnWishlist**
> \Swagger\Client\Model\SuccessResponse mergeProductOnWishlist($body, $content_type, $accept)

Create a wishlist for a customer

Create a new wishlist for a logged in customer or extend the existing wishlist given a set of products.  **Important constraints**  * Anonymous (not logged-in) customers can not have wishlists. * A customer can only have a single wishlist. * The wishlist feature has to be activated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');// Configure API key authorization: ContextToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\WishlistMergeBody(); // \Swagger\Client\Model\WishlistMergeBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->mergeProductOnWishlist($body, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->mergeProductOnWishlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WishlistMergeBody**](../Model/WishlistMergeBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readCustomerWishlist**
> \Swagger\Client\Model\WishlistLoadRouteResponse readCustomerWishlist($content_type, $accept, $body)

Fetch a wishlist

Fetch a customer's wishlist. Products on the wishlist can be filtered using a criteria object.  **Important constraints**  * Anonymous (not logged-in) customers can not have wishlists. * The wishlist feature has to be activated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');// Configure API key authorization: ContextToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\CustomerWishlistBody(); // \Swagger\Client\Model\CustomerWishlistBody | 

try {
    $result = $apiInstance->readCustomerWishlist($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->readCustomerWishlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\CustomerWishlistBody**](../Model/CustomerWishlistBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WishlistLoadRouteResponse**](../Model/WishlistLoadRouteResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

