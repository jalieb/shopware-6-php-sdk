# AccountChangeprofileBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**salutation_id** | **string** | Id of the salutation for the customer account. Fetch options using &#x60;salutation&#x60; endpoint. | 
**title** | **string** | (Academic) title of the customer | [optional] 
**first_name** | **string** | Customer first name. Value will be reused for shipping and billing address if not provided explicitly. | 
**last_name** | **string** | Customer last name. Value will be reused for shipping and billing address if not provided explicitly. | 
**company** | **string** | Company of the customer. Only required when &#x60;accountType&#x60; is &#x60;business&#x60;. | [optional] 
**birthday_day** | **int** | Birthday day | [optional] 
**birthday_month** | **int** | Birthday month | [optional] 
**birthday_year** | **int** | Birthday year | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

