# Swagger\Client\AddressApi

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerAddress**](AddressApi.md#createcustomeraddress) | **POST** /account/address | Create a new address for a customer
[**defaultBillingAddress**](AddressApi.md#defaultbillingaddress) | **PATCH** /account/address/default-billing/{addressId} | Change a customer&#x27;s default billing address
[**defaultShippingAddress**](AddressApi.md#defaultshippingaddress) | **PATCH** /account/address/default-shipping/{addressId} | Change a customer&#x27;s default shipping address
[**deleteCustomerAddress**](AddressApi.md#deletecustomeraddress) | **DELETE** /account/address/{addressId} | Delete an address of a customer
[**listAddress**](AddressApi.md#listaddress) | **POST** /account/list-address | Fetch addresses of a customer
[**updateCustomerAddress**](AddressApi.md#updatecustomeraddress) | **PATCH** /account/address/{addressId} | Modify an address of a customer

# **createCustomerAddress**
> \Swagger\Client\Model\CustomerAddress createCustomerAddress($content_type, $accept, $body)

Create a new address for a customer

Creates a new address for a customer.

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

$apiInstance = new Swagger\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$body = new \Swagger\Client\Model\CustomerAddress(); // \Swagger\Client\Model\CustomerAddress | 

try {
    $result = $apiInstance->createCustomerAddress($content_type, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->createCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **body** | [**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **defaultBillingAddress**
> defaultBillingAddress($address_id, $content_type, $accept)

Change a customer's default billing address

Updates the default (preselected) billing addresses of a customer.

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

$apiInstance = new Swagger\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = "address_id_example"; // string | Address ID
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->defaultBillingAddress($address_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->defaultBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| Address ID |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **defaultShippingAddress**
> defaultShippingAddress($address_id, $content_type, $accept)

Change a customer's default shipping address

Updates the default (preselected) shipping addresses of a customer.

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

$apiInstance = new Swagger\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = "address_id_example"; // string | Address ID
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->defaultShippingAddress($address_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->defaultShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| Address ID |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerAddress**
> deleteCustomerAddress($address_id, $content_type, $accept)

Delete an address of a customer

Delete an address of customer.  Only addresses which are not set as default addresses for shipping or billing can be deleted. You can check the current default addresses of your customer using the profile information endpoint and change them using the default address endpoint.       **A customer must have at least one address (which can be used for shipping and billing).**  An automatic fallback is not applied.

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

$apiInstance = new Swagger\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = "address_id_example"; // string | ID of the address to be deleted.
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->deleteCustomerAddress($address_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->deleteCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| ID of the address to be deleted. |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new Swagger\Client\Api\AddressApi(
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
    echo 'Exception when calling AddressApi->listAddress: ', $e->getMessage(), PHP_EOL;
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

# **updateCustomerAddress**
> \Swagger\Client\Model\CustomerAddress updateCustomerAddress($content_type, $accept, $address_id, $body)

Modify an address of a customer

Modifies an existing address of a customer.

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

$apiInstance = new Swagger\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types
$address_id = "address_id_example"; // string | Address ID
$body = new \Swagger\Client\Model\CustomerAddress(); // \Swagger\Client\Model\CustomerAddress | 

try {
    $result = $apiInstance->updateCustomerAddress($content_type, $accept, $address_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->updateCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]
 **address_id** | **string**| Address ID |
 **body** | [**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

