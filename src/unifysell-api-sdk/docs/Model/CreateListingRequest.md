# CreateListingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability** | **int** | Describes if an article is available right now or when it will be available again.           Measured in days. Set it to 0 if the article is available in stock. | 
**category_ids** | **int[]** | Give a list of the ids of the listings category. | 
**condition** | **string** | Describes in what condition the sold article is in. See the enum values for more information. | 
**date_finished** | **string** | This timestamps defines when the auction ends. | [optional] 
**date_started** | **string** | This timestamps gives the moment when the listing will become available. | [optional] 
**delivery** | **string** | Describes the delivery option for the article. | 
**delivery_options** | [**\Unifysell\SDK\Model\CreateListingRequestDeliveryOptions[]**](CreateListingRequestDeliveryOptions.md) | Defines the shipping options available for the package. This is only required for several platforms. Give a list of available options. | 
**description** | **string** | A text describing the sold article. | 
**marketplace_id** | **int** | Id of the marketplace to sell the article on. | 
**payment_description** | **string** | Detailed description of available payment options. | [optional] 
**pictures** | [**\Unifysell\SDK\Model\CreateListingRequestPictures[]**](CreateListingRequestPictures.md) | Give a list of pictures. | 
**price** | [**\Unifysell\SDK\Model\Money**](Money.md) |  | 
**promotions** | **string[]** | A list of promotion codes that are available for the listing. | [optional] 
**quantity** | **int** | The amount of articles available for this listing. | 
**seller_sku** | **string** | Identifier for sellers internal referencing. | 
**template_id** | **string** | Give the id of an existing template to be applied on the listing description. | [optional] 
**title** | **string** | The name of the article. | 
**warranty** | **string** | Choose a warranty for the product. Options are defined in an enum. | 
**warranty_description** | **string** | Give a more detailed description about your warranties. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


