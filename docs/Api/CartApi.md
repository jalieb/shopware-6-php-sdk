# Swagger\Client\CartApi

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLineItem**](CartApi.md#addlineitem) | **POST** /checkout/cart/line-item | Add items to the cart
[**deleteCart**](CartApi.md#deletecart) | **DELETE** /checkout/cart | Delete a cart
[**readCart**](CartApi.md#readcart) | **GET** /checkout/cart | Fetch or create a cart
[**removeLineItem**](CartApi.md#removelineitem) | **DELETE** /checkout/cart/line-item | Remove items from the cart
[**updateLineItem**](CartApi.md#updatelineitem) | **PATCH** /checkout/cart/line-item | Update items in the cart

# **addLineItem**
> \Swagger\Client\Model\Cart addLineItem($content_type, $accept, $body)

Add items to the cart

This route adds items to the cart. An item can be a product or promotion for example. They are referenced by the `referencedId`-parameter.  Example: [Working with the cart - Guide](https://developer.shopware.com/docs/guides/integrations-api/store-api-guide/work-with-the-cart#adding-new-items-to-the-cart)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\CartItems(); // \Swagger\Client\Model\CartItems | 

try {
    $result = $apiInstance->addLineItem($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->addLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\CartItems**](../Model/CartItems.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCart**
> \Swagger\Client\Model\SuccessResponse deleteCart($content_type, $accept)

Delete a cart

This route deletes the cart of the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->deleteCart($content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->deleteCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readCart**
> \Swagger\Client\Model\Cart readCart($content_type, $accept, $name)

Fetch or create a cart

Used to fetch the current cart or for creating a new one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$name = "name_example"; // string | The name of the new cart. This parameter will only be used when creating a new cart.

try {
    $result = $apiInstance->readCart($content_type, $accept, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->readCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **name** | **string**| The name of the new cart. This parameter will only be used when creating a new cart. | [optional]

### Return type

[**\Swagger\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeLineItem**
> \Swagger\Client\Model\Cart removeLineItem($ids, $content_type, $accept)

Remove items from the cart

This route removes items from the cart and recalculates it.  Example: [Working with the cart - Guide](https://developer.shopware.com/docs/guides/integrations-api/store-api-guide/work-with-the-cart#deleting-items-in-the-cart)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array("ids_example"); // string[] | A list of product identifiers.
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->removeLineItem($ids, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->removeLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| A list of product identifiers. |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLineItem**
> \Swagger\Client\Model\Cart updateLineItem($content_type, $accept, $body)

Update items in the cart

This route updates items in the cart. A typical example is updating the quantity of an item.  Example: [Working with the cart - Guide](https://developer.shopware.com/docs/guides/integrations-api/store-api-guide/work-with-the-cart#updating-items-in-the-cart)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\CartItems(); // \Swagger\Client\Model\CartItems | 

try {
    $result = $apiInstance->updateLineItem($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->updateLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\CartItems**](../Model/CartItems.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

