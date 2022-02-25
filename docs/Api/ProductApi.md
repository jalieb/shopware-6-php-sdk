# Swagger\Client\ProductApi

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**readProduct**](ProductApi.md#readproduct) | **POST** /product | Fetch a list of products
[**readProductCrossSellings**](ProductApi.md#readproductcrosssellings) | **POST** /product/{productId}/cross-selling | Fetch cross-selling groups of a product
[**readProductDetail**](ProductApi.md#readproductdetail) | **POST** /product/{productId} | Fetch a single product
[**readProductExport**](ProductApi.md#readproductexport) | **GET** /product-export/{accessKey}/{fileName} | Export product export
[**readProductListing**](ProductApi.md#readproductlisting) | **POST** /product-listing/{categoryId} | Fetch a product listing by category
[**readProductReviews**](ProductApi.md#readproductreviews) | **POST** /product/{productId}/reviews | Fetch product reviews
[**saveProductReview**](ProductApi.md#saveproductreview) | **POST** /product/{productId}/review | Save a product review
[**searchPage**](ProductApi.md#searchpage) | **POST** /search | Search for products
[**searchSuggest**](ProductApi.md#searchsuggest) | **POST** /search-suggest | Search for products (suggest)

# **readProduct**
> \Swagger\Client\Model\InlineResponse2003 readProduct($content_type, $accept, $body)

Fetch a list of products

List products that match the given criteria. For performance ressons a limit should always be set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\ProductBody(); // \Swagger\Client\Model\ProductBody | 

try {
    $result = $apiInstance->readProduct($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->readProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\ProductBody**](../Model/ProductBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProductCrossSellings**
> \Swagger\Client\Model\CrossSellingElementCollection readProductCrossSellings($product_id, $content_type, $accept)

Fetch cross-selling groups of a product

This route is used to load the cross sellings for a product. A product has several cross selling definitions in which several products are linked. The route returns the cross sellings together with the linked products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = "product_id_example"; // string | Product ID
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->readProductCrossSellings($product_id, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->readProductCrossSellings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| Product ID |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\CrossSellingElementCollection**](../Model/CrossSellingElementCollection.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProductDetail**
> \Swagger\Client\Model\ProductDetailResponse readProductDetail($product_id, $content_type, $accept)

Fetch a single product

This route is used to load a single product with the corresponding details. In addition to loading the data, the best variant of the product is determined when a parent id is passed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = "product_id_example"; // string | Product ID
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->readProductDetail($product_id, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->readProductDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| Product ID |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\ProductDetailResponse**](../Model/ProductDetailResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProductExport**
> readProductExport($access_key, $file_name, $content_type, $accept)

Export product export

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$access_key = "access_key_example"; // string | Access Key
$file_name = "file_name_example"; // string | File Name
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->readProductExport($access_key, $file_name, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->readProductExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access Key |
 **file_name** | **string**| File Name |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProductListing**
> \Swagger\Client\Model\ProductListingResult readProductListing($content_type, $accept, $category_id, $body)

Fetch a product listing by category

Fetches a product listing for a specific category. It also provides filters, sortings and property aggregations, analogous to the /search endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$category_id = "category_id_example"; // string | Identifier of a category.
$body = new \Swagger\Client\Model\ProductlistingCategoryIdBody(); // \Swagger\Client\Model\ProductlistingCategoryIdBody | 

try {
    $result = $apiInstance->readProductListing($content_type, $accept, $category_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->readProductListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **category_id** | **string**| Identifier of a category. |
 **body** | [**\Swagger\Client\Model\ProductlistingCategoryIdBody**](../Model/ProductlistingCategoryIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductListingResult**](../Model/ProductListingResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProductReviews**
> \Swagger\Client\Model\InlineResponse2004 readProductReviews($content_type, $accept, $product_id, $body)

Fetch product reviews

Perform a filtered search for product reviews.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$product_id = "product_id_example"; // string | Identifier of the product.
$body = new \Swagger\Client\Model\ProductIdReviewsBody(); // \Swagger\Client\Model\ProductIdReviewsBody | 

try {
    $result = $apiInstance->readProductReviews($content_type, $accept, $product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->readProductReviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **product_id** | **string**| Identifier of the product. |
 **body** | [**\Swagger\Client\Model\ProductIdReviewsBody**](../Model/ProductIdReviewsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveProductReview**
> saveProductReview($content_type, $accept, $product_id, $body)

Save a product review

Saves a review for a product. Reviews have to be activated in the settings.

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

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$product_id = "product_id_example"; // string | Identifier of the product which is reviewed.
$body = new \Swagger\Client\Model\ProductIdReviewBody(); // \Swagger\Client\Model\ProductIdReviewBody | 

try {
    $apiInstance->saveProductReview($content_type, $accept, $product_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->saveProductReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **product_id** | **string**| Identifier of the product which is reviewed. |
 **body** | [**\Swagger\Client\Model\ProductIdReviewBody**](../Model/ProductIdReviewBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPage**
> \Swagger\Client\Model\ProductListingResult searchPage($content_type, $accept, $body)

Search for products

Performs a search for products which can be used to display a product listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\SearchBody(); // \Swagger\Client\Model\SearchBody | 

try {
    $result = $apiInstance->searchPage($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->searchPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\SearchBody**](../Model/SearchBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductListingResult**](../Model/ProductListingResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSuggest**
> \Swagger\Client\Model\ProductListingResult searchSuggest($body, $content_type, $accept)

Search for products (suggest)

Can be used to implement search previews or suggestion listings, that don’t require any interaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SearchsuggestBody(); // \Swagger\Client\Model\SearchsuggestBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->searchSuggest($body, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->searchSuggest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SearchsuggestBody**](../Model/SearchsuggestBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\ProductListingResult**](../Model/ProductListingResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

