# Swagger\Client\PaymentShippingApi

All URIs are relative to *http://127.0.0.1/store-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**handlePaymentMethod**](PaymentShippingApi.md#handlepaymentmethod) | **POST** /handle-payment | Initiate a payment for an order
[**readShippingMethod**](PaymentShippingApi.md#readshippingmethod) | **POST** /shipping-method | Fetch shipping methods

# **handlePaymentMethod**
> handlePaymentMethod($body, $content_type, $accept)

Initiate a payment for an order

This generic endpoint is should be called to initiate a payment flow after an order has been created. The details of the payment flow can differ depending on the payment integration and might require calling additional operations or the setup of webhooks.  The endpoint internally calls the payment handler of the payment method currently set for the order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PaymentShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\HandlepaymentBody(); // \Swagger\Client\Model\HandlepaymentBody | 
$content_type = "application/json"; // string | Content type of the request
$accept = "application/json"; // string | Accepted response content types

try {
    $apiInstance->handlePaymentMethod($body, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling PaymentShippingApi->handlePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HandlepaymentBody**](../Model/HandlepaymentBody.md)|  |
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

$apiInstance = new Swagger\Client\Api\PaymentShippingApi(
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
    echo 'Exception when calling PaymentShippingApi->readShippingMethod: ', $e->getMessage(), PHP_EOL;
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

