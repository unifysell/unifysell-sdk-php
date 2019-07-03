# CreateListingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warranty_description** | **string** | Give a more detailed description about your warranties. | [optional] 
**warranty** | **string** | Choose a warranty for the product. Options are defined in an enum. | 
**title** | **string** | The name of the article. | 
**template_id** | **string** | Give the id of an existing template to be applied on the listing description. | [optional] 
**seller_sku** | **string** | Identifier for sellers internal referencing. | 
**quantity** | **int** | The amount of articles available for this listing. | 
**promotions** | **string[]** | A list of promotion codes that are available for the listing. | [optional] 
**price** | [**\Unifysell\SDK\Model\Money**](Money.md) |  | 
**pictures** | [**\Unifysell\SDK\Model\CreateListingRequestPictures[]**](CreateListingRequestPictures.md) | Give a list of pictures. | 
**payment_description** | **string** | Detailed description of available payment options. | [optional] 
**marketplace_id** | **int** | Id of the marketplace to sell the article on. | 
**description** | **string** | A text describing the sold article. | 
**delivery_options** | [**\Unifysell\SDK\Model\CreateListingRequestDeliveryOptions[]**](CreateListingRequestDeliveryOptions.md) | Defines the shipping options available for the package. This is only required for several platforms. Give a list of available options. | 
**delivery** | **string** | Describes the delivery option for the article. | 
**date_started** | **string** | This timestamps gives the moment when the listing will become available. | [optional] 
**date_finished** | **string** | This timestamps defines when the auction ends. | [optional] 
**condition** | **string** | Describes in what condition the sold article is in. See the enum values for more information. | 
**category_ids** | **int[]** | Give a list of the ids of the listings category. | 
**availability** | **int** | Describes if an article is available right now or when it will be available again.           Measured in days. Set it to 0 if the article is available in stock. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

