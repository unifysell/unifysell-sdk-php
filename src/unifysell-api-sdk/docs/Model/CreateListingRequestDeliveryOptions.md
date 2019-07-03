# CreateListingRequestDeliveryOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_is_cumulative** | **bool** | Is the shipping price paid per article or per sending? This is only available for ricardo. | 
**shipping_cost** | [**\Unifysell\SDK\Model\Money**](Money.md) |  | 
**package_weight** | **string** | Enum defines available standard packge weight classes. You can chose the one fitting you article best. | [optional] 
**package_size** | **string** | Enum defines available standard packge sizes. You can chose one of them the article fits into. | [optional] 
**package_service** | **string** | The package service chosen for this delivery option. | [optional] 
**description** | **string** | Describes this delivery option in words so it is well readable to a customer. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

