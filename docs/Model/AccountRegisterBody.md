# AccountRegisterBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email of the customer. Has to be unique, unless &#x60;guest&#x60; is &#x60;true&#x60; | 
**password** | **string** | Password for the customer. Required, unless &#x60;guest&#x60; is &#x60;true&#x60; | 
**salutation_id** | **string** | Id of the salutation for the customer account. Fetch options using &#x60;salutation&#x60; endpoint. | 
**first_name** | **string** | Customer first name. Value will be reused for shipping and billing address if not provided explicitly. | 
**last_name** | **string** | Customer last name. Value will be reused for shipping and billing address if not provided explicitly. | 
**accepted_data_protection** | **bool** | Flag indicating accepted data protection | 
**storefront_url** | **string** | URL of the storefront for that registration. Used in confirmation emails. Has to be one of the configured domains of the sales channel. | 
**billing_address** | [**\Swagger\Client\Model\CustomerAddress**](CustomerAddress.md) |  | 
**shipping_address** | [**\Swagger\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional] 
**account_type** | **string** | Account type of the customer which can be either &#x60;private&#x60; or &#x60;business&#x60;. | [optional] [default to 'private']
**guest** | **bool** | If set, will create a guest customer. Guest customers can re-use an email address and don&#x27;t need a password. | [optional] [default to false]
**birthday_day** | **int** | Birthday day | [optional] 
**birthday_month** | **int** | Birthday month | [optional] 
**birthday_year** | **int** | Birthday year | [optional] 
**title** | **string** | (Academic) title of the customer | [optional] 
**affiliate_code** | **string** | Field can be used to store an affiliate tracking code | [optional] 
**campaign_code** | **string** | Field can be used to store a campaign tracking code | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

