# Swagger\Client\LoginRegistrationApi

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerGroupRegistrationInfo**](LoginRegistrationApi.md#getcustomergroupregistrationinfo) | **GET** /customer-group-registration/config/{customerGroupId} | Fetch registration settings for customer group
[**loginCustomer**](LoginRegistrationApi.md#logincustomer) | **POST** /account/login | Log in a customer
[**logoutCustomer**](LoginRegistrationApi.md#logoutcustomer) | **POST** /account/logout | Log out a customer
[**register**](LoginRegistrationApi.md#register) | **POST** /account/register | Register a customer
[**registerConfirm**](LoginRegistrationApi.md#registerconfirm) | **POST** /account/register-confirm | Confirm a customer registration

# **getCustomerGroupRegistrationInfo**
> \Swagger\Client\Model\CustomerGroup getCustomerGroupRegistrationInfo($customer_group_id, $content_type, $accept)

Fetch registration settings for customer group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_group_id = "customer_group_id_example"; // string | Customer group id
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->getCustomerGroupRegistrationInfo($customer_group_id, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->getCustomerGroupRegistrationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_group_id** | **string**| Customer group id |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginCustomer**
> \Swagger\Client\Model\ContextTokenResponse loginCustomer($body, $content_type, $accept)

Log in a customer

Logs in customers given their credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AccountLoginBody(); // \Swagger\Client\Model\AccountLoginBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->loginCustomer($body, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->loginCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountLoginBody**](../Model/AccountLoginBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\ContextTokenResponse**](../Model/ContextTokenResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logoutCustomer**
> \Swagger\Client\Model\ContextTokenResponse logoutCustomer($content_type, $accept)

Log out a customer

Logs out a customer.

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

$apiInstance = new Swagger\Client\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->logoutCustomer($content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->logoutCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\ContextTokenResponse**](../Model/ContextTokenResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ContextToken](../../README.md#ContextToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register**
> \Swagger\Client\Model\Customer register($body, $content_type, $accept)

Register a customer

Registers a customer. Used both for normal customers and guest customers.  See the Guide \"Register a customer\" for more information on customer registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AccountRegisterBody(); // \Swagger\Client\Model\AccountRegisterBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $result = $apiInstance->register($body, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountRegisterBody**](../Model/AccountRegisterBody.md)|  |
 **content_type** | **string**| Content type of the request | [default to application/json]
 **accept** | **string**| Accepted response content types | [default to application/json]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerConfirm**
> registerConfirm($body, $content_type, $accept)

Confirm a customer registration

Confirms a customer registration when double opt-in is activated.  Learn more about double opt-in registration in our guide \"Register a customer\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoginRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AccountRegisterconfirmBody(); // \Swagger\Client\Model\AccountRegisterconfirmBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->registerConfirm($body, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling LoginRegistrationApi->registerConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountRegisterconfirmBody**](../Model/AccountRegisterconfirmBody.md)|  |
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

