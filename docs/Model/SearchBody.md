# SearchBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order** | **string** | Specifies the sorting of the products by &#x60;availableSortings&#x60;. If not set, the default sorting will be set according to the shop settings. The available sorting options are sent within the response under the &#x60;availableSortings&#x60; key. In order to sort by a field, consider using the &#x60;sort&#x60; parameter from the listing criteria. Do not use both parameters together, as it might lead to unexpected results. | [optional] 
**limit** | **int** | Number of items per result page. If not set, the limit will be set according to the default products per page, defined in the system settings. | [optional] 
**p** | **int** | Search result page | [optional] [default to 1]
**manufacturer** | **string** | Filter by manufacturers. List of manufacturer identifiers separated by a &#x60;|&#x60;. | [optional] 
**min_price** | **int** | Filters by a minimum product price. Has to be lower than the &#x60;max-price&#x60; filter. | [optional] [default to 0]
**max_price** | **int** | Filters by a maximum product price. Has to be higher than the &#x60;min-price&#x60; filter. | [optional] [default to 0]
**rating** | **int** | Filter products with a minimum average rating. | [optional] 
**shipping_free** | **bool** | Filters products that are marked as shipping-free. | [optional] [default to false]
**properties** | **string** | Filters products by their properties. List of property identifiers separated by a &#x60;|&#x60;. | [optional] 
**manufacturer_filter** | **bool** | Enables/disabled filtering by manufacturer. If set to false, the &#x60;manufacturer&#x60; filter will be ignored. Also the &#x60;aggregations[manufacturer]&#x60; key will be removed from the response. | [optional] [default to true]
**price_filter** | **bool** | Enables/disabled filtering by price. If set to false, the &#x60;min-price&#x60; and &#x60;max-price&#x60; filter will be ignored. Also the &#x60;aggregations[price]&#x60; key will be removed from the response. | [optional] [default to true]
**rating_filter** | **bool** | Enables/disabled filtering by rating. If set to false, the &#x60;rating&#x60; filter will be ignored. Also the &#x60;aggregations[rating]&#x60; key will be removed from the response. | [optional] [default to true]
**shipping_free_filter** | **bool** | Enables/disabled filtering by shipping-free products. If set to false, the &#x60;shipping-free&#x60; filter will be ignored. Also the &#x60;aggregations[shipping-free]&#x60; key will be removed from the response. | [optional] [default to true]
**property_filter** | **bool** | Enables/disabled filtering by properties products. If set to false, the &#x60;properties&#x60; filter will be ignored. Also the &#x60;aggregations[properties]&#x60; key will be removed from the response. | [optional] [default to true]
**property_whitelist** | **string** | A whitelist of property identifiers which can be used for filtering. List of property identifiers separated by a &#x60;|&#x60;. The &#x60;property-filter&#x60; must be &#x60;true&#x60;, otherwise the whitelist has no effect. | [optional] 
**reduce_aggregations** | **string** | By sending the parameter &#x60;reduce-aggregations&#x60; , the post-filters that were applied by the customer, are also applied to the aggregations. This has the consequence that only values are returned in the aggregations that would lead to further filter results. This parameter is a flag, the value has no effect. | [optional] 
**no_aggregations** | **string** | Resets all aggregations in the criteria. This parameter is a flag, the value has no effect. | [optional] 
**only_aggregations** | **string** | If this flag is set, no products are fetched. Sorting and associations are also ignored. This parameter is a flag, the value has no effect. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

