# Cart

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the cart - for example &#x60;guest-cart&#x60; | [optional] 
**token** | **string** | Context token identifying the cart and the user session | [optional] 
**price** | [**\Swagger\Client\Model\CartPrice**](CartPrice.md) |  | [optional] 
**line_items** | [**\Swagger\Client\Model\LineItem[]**](LineItem.md) | All items within the cart | [optional] 
**errors** | [**\Swagger\Client\Model\CartErrors[]**](CartErrors.md) | A list of all cart errors, such as insufficient stocks, invalid addresses or vouchers. | [optional] 
**transactions** | [**\Swagger\Client\Model\CartTransactions[]**](CartTransactions.md) | A list of all payment transactions associated with the current cart. | [optional] 
**modified** | **bool** |  | [optional] 
**customer_comment** | **string** | A comment that can be added to the cart. | [optional] 
**affiliate_code** | **string** | An affiliate tracking code | [optional] 
**campaign_code** | **string** | A campaign tracking code | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

