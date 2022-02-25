# Criteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page** | **int** | Search result page | [optional] 
**limit** | **int** | Number of items per result page | [optional] 
**filter** | [**\Swagger\Client\Model\CriteriaFilter[]**](CriteriaFilter.md) | List of filters to restrict the search result. For more information, see [Search Queries &gt; Filter](https://shopware.stoplight.io/docs/store-api/docs/concepts/search-queries.md#filter) | [optional] 
**sort** | [**\Swagger\Client\Model\CriteriaSort[]**](CriteriaSort.md) | Sorting in the search result. | [optional] 
**post_filter** | [**\Swagger\Client\Model\CriteriaFilter[]**](CriteriaFilter.md) | Filters that applied without affecting aggregations. For more information, see [Search Queries &gt; Post Filter](https://shopware.stoplight.io/docs/store-api/docs/concepts/search-queries.md#post-filter) | [optional] 
**associations** | **object** | Used to fetch associations which are not fetched by default. | [optional] 
**aggregations** | [**\Swagger\Client\Model\CriteriaAggregations[]**](CriteriaAggregations.md) | Used to perform aggregations on the search result. For more information, see [Search Queries &gt; Aggregations](https://shopware.stoplight.io/docs/store-api/docs/concepts/search-queries.md#aggregations) | [optional] 
**grouping** | **string[]** | Perform groupings over certain fields | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

