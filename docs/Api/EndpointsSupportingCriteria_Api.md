# Swagger\Client\EndpointsSupportingCriteria_Api

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAddress**](EndpointsSupportingCriteria_Api.md#listaddress) | **POST** /account/list-address | Fetch addresses of a customer
[**readCategory**](EndpointsSupportingCriteria_Api.md#readcategory) | **POST** /category/{categoryId} | Fetch a single category
[**readCategoryList**](EndpointsSupportingCriteria_Api.md#readcategorylist) | **POST** /category | Fetch a list of categories
[**readCountry**](EndpointsSupportingCriteria_Api.md#readcountry) | **POST** /country | Fetch countries
[**readCurrency**](EndpointsSupportingCriteria_Api.md#readcurrency) | **POST** /currency | Fetch currencies
[**readCustomer**](EndpointsSupportingCriteria_Api.md#readcustomer) | **POST** /account/customer | Get information about current customer
[**readCustomerWishlist**](EndpointsSupportingCriteria_Api.md#readcustomerwishlist) | **POST** /customer/wishlist | Fetch a wishlist
[**readLandingPage**](EndpointsSupportingCriteria_Api.md#readlandingpage) | **POST** /landing-page/{landingPageId} | Fetch a landing page with the resolved CMS page
[**readLanguages**](EndpointsSupportingCriteria_Api.md#readlanguages) | **POST** /language | Fetch languages
[**readNavigation**](EndpointsSupportingCriteria_Api.md#readnavigation) | **POST** /navigation/{requestActiveId}/{requestRootId} | Fetch a navigation menu
[**readOrder**](EndpointsSupportingCriteria_Api.md#readorder) | **POST** /order | Fetch a list of orders
[**readPaymentMethod**](EndpointsSupportingCriteria_Api.md#readpaymentmethod) | **POST** /payment-method | Loads all available payment methods
[**readProduct**](EndpointsSupportingCriteria_Api.md#readproduct) | **POST** /product | Fetch a list of products
[**readProductReviews**](EndpointsSupportingCriteria_Api.md#readproductreviews) | **POST** /product/{productId}/reviews | Fetch product reviews
[**readSalutation**](EndpointsSupportingCriteria_Api.md#readsalutation) | **POST** /salutation | Fetch salutations
[**readSeoUrl**](EndpointsSupportingCriteria_Api.md#readseourl) | **POST** /seo-url | Fetch SEO routes
[**readShippingMethod**](EndpointsSupportingCriteria_Api.md#readshippingmethod) | **POST** /shipping-method | Fetch shipping methods

# **listAddress**
> \Swagger\Client\Model\CustomerAddress[] listAddress($content_type, $accept, $body)

Fetch addresses of a customer

Lists all addresses of the current customer and allows filtering them based on a criteria.

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

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\AccountListaddressBody(); // \Swagger\Client\Model\AccountListaddressBody | 

try {
    $result = $apiInstance->listAddress($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->listAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\AccountListaddressBody**](../Model/AccountListaddressBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerAddress[]**](../Model/CustomerAddress.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
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
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readCategory: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
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
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readCategoryList: ', $e->getMessage(), PHP_EOL;
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

# **readCountry**
> \Swagger\Client\Model\InlineResponse2006 readCountry($content_type, $accept, $body)

Fetch countries

Perform a filtered search for countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\CountryBody(); // \Swagger\Client\Model\CountryBody | 

try {
    $result = $apiInstance->readCountry($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\CountryBody**](../Model/CountryBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readCurrency**
> \Swagger\Client\Model\InlineResponse2007 readCurrency($content_type, $accept, $body)

Fetch currencies

Perform a filtered search for currencies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\CurrencyBody(); // \Swagger\Client\Model\CurrencyBody | 

try {
    $result = $apiInstance->readCurrency($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\CurrencyBody**](../Model/CurrencyBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readCustomer**
> \Swagger\Client\Model\Customer readCustomer($content_type, $accept, $body)

Get information about current customer

Returns information about the current customer.

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

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\AccountCustomerBody(); // \Swagger\Client\Model\AccountCustomerBody | 

try {
    $result = $apiInstance->readCustomer($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\AccountCustomerBody**](../Model/AccountCustomerBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

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

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
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
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readCustomerWishlist: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
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
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readLandingPage: ', $e->getMessage(), PHP_EOL;
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

# **readLanguages**
> \Swagger\Client\Model\InlineResponse2008 readLanguages($content_type, $accept, $body)

Fetch languages

Perform a filtered search for languages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\LanguageBody(); // \Swagger\Client\Model\LanguageBody | 

try {
    $result = $apiInstance->readLanguages($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\LanguageBody**](../Model/LanguageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

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

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
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
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readNavigation: ', $e->getMessage(), PHP_EOL;
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

# **readOrder**
> \Swagger\Client\Model\OrderRouteResponse readOrder($body, $content_type, $accept)

Fetch a list of orders

List orders of a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderBody(); // \Swagger\Client\Model\OrderBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->readOrder($body, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderBody**](../Model/OrderBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\OrderRouteResponse**](../Model/OrderRouteResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPaymentMethod**
> \Swagger\Client\Model\InlineResponse200 readPaymentMethod($body, $content_type, $accept)

Loads all available payment methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PaymentmethodBody(); // \Swagger\Client\Model\PaymentmethodBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->readPaymentMethod($body, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PaymentmethodBody**](../Model/PaymentmethodBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
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
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readProduct: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
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
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readProductReviews: ', $e->getMessage(), PHP_EOL;
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

# **readSalutation**
> \Swagger\Client\Model\InlineResponse2009 readSalutation($content_type, $accept, $body)

Fetch salutations

Perform a filtered search for salutations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\SalutationBody(); // \Swagger\Client\Model\SalutationBody | 

try {
    $result = $apiInstance->readSalutation($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readSalutation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\SalutationBody**](../Model/SalutationBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readSeoUrl**
> \Swagger\Client\Model\InlineResponse2005 readSeoUrl($content_type, $accept, $body)

Fetch SEO routes

Perform a filtered search for seo urls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\SeourlBody(); // \Swagger\Client\Model\SeourlBody | 

try {
    $result = $apiInstance->readSeoUrl($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readSeoUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\SeourlBody**](../Model/SeourlBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readShippingMethod**
> \Swagger\Client\Model\InlineResponse2001 readShippingMethod($content_type, $accept, $body, $only_available)

Fetch shipping methods

Perform a filtered search for shipping methods.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EndpointsSupportingCriteria_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\ShippingmethodBody(); // \Swagger\Client\Model\ShippingmethodBody | 
$only_available = true; // bool | List only available shipping methods. This filters shipping methods methods which can not be used in the actual context because of their availability rule.

try {
    $result = $apiInstance->readShippingMethod($content_type, $accept, $body, $only_available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsSupportingCriteria_Api->readShippingMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\ShippingmethodBody**](../Model/ShippingmethodBody.md)|  | [optional]
 **only_available** | **bool**| List only available shipping methods. This filters shipping methods methods which can not be used in the actual context because of their availability rule. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

