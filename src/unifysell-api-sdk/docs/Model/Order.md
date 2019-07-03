# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_changed** | **string** | Last time the order was mutated. | 
**ebay_order_id** | **string** | The order id set by eBay. | [optional] 
**order_type** | **string** | The type of the order. Only Japan allows other than StandardOrder. | [optional] 
**is_premium_order** | **bool** | True if the order has a Premium Shipping Service Level Agreement with Amazon. | [optional] 
**ebay_payment_status** | **string** | Ebays internal payment status. | [optional] 
**sales_channel** | **string** | The amazon sales channel of the first item in the order. | [optional] 
**package_service** | **string** | The name of the package service sending the shipment. | [optional] 
**amazon_order_id** | **string** | The official internal amazon id. | [optional] 
**shipped_by_amazon_tfm** | **bool** | Defines if Amazon Transportation for Merchants was selected. | [optional] 
**position_ids** | **string[]** | List of all position references. | [optional] 
**date_shipped** | **string** | The time when the order was marked as shipped. | [optional] 
**invoice_no** | **string** | The official rakuten identifier of the orders invoice. | [optional] 
**date_created** | **string** | The first time the order was seen by unifysell. | 
**ship_method** | **string** | The shipping method. | [optional] 
**number_of_items_unshipped** | **int** | The number of unshipped items. | [optional] 
**label_ids** | **string[]** | List of all label references. | [optional] 
**is_ebay_plus** | **bool** | Defines wether the order was bought via ebay plus. | [optional] 
**fulfillment_channel** | **string** | How the order was fulfilled: by Amazon (AFN) or by the seller (MFN). | [optional] 
**hood_order_id** | **string** | The official hood identifier of the order. | [optional] 
**ship_method_code** | **string** | A code referencing the shpping method. | [optional] 
**remote_allowed_shipping_methods** | **string[]** | A list of allowed shipping methods. | [optional] 
**shipping_cost** | [**\Unifysell\SDK\Model\Money**](Money.md) |  | [optional] 
**shipment_increment_id** | **string** | The id of the added shipment of the order. | [optional] 
**status** | **string** | The status of the order: defines the state of payment and shipment or cancellation. | 
**seller_email** | **string** | The email of the orders seller. | [optional] 
**latest_ship_date** | **string** | Together with earliestShipDate it gives the allowed shipping interval. | [optional] 
**is_prime** | **bool** | Defines if the order was sold through amazon prime. | [optional] 
**store_id** | **string** | The id of the store the order is in. | [optional] 
**order_no** | **string** | The official rakuten identifier of the order. | [optional] 
**purchased_order_number** | **string** | The amazon purchase order (PO) number entered by the buyer at checkout. | [optional] 
**earliest_ship_date** | **string** | Together with latestShipDate it gives the allowed shipping interval. | [optional] 
**shipment_service_level_category** | **string** | The amazon shipment service level category of the order. | [optional] 
**note** | **string** | A note by the buyer. | [optional] 
**tracking_number_id** | **string** | The id of the added shipment track. | [optional] 
**comment_merchant** | **string** | A comment by the seller. | [optional] 
**order_id** | **string** | The internal magento identifier. | [optional] 
**ship_service_level** | **string** | The amazon shipment service level of the order. | [optional] 
**number_of_items_shipped** | **int** | The number of shipped items. | [optional] 
**shipment_method** | **string** | The type of shipment. | 
**buyer_id** | **int** | Referencing the buyer. | [optional] 
**pretax_total** | [**\Unifysell\SDK\Model\Money**](Money.md) |  | [optional] 
**date_paid** | **string** | The time when the order was paid by the buyer. | [optional] 
**invoice_address_id** | **int** | Referencing the address to send the invoice to. | [optional] 
**id** | **int** | Internal unifysell id | 
**date_approved** | **string** | The date when the order started. | [optional] 
**shipping_address_id** | **int** | Referencing the address to ship the order to. | [optional] 
**shipment_offers_available** | **bool** | Is set to true, if the order is not sent to the buyer, but the buyer will pick it up himself. | [optional] 
**payment_method** | **string** | The method the buyer used to pay. | [optional] 
**comment_client** | **string** | A comment by the buyer. | [optional] 
**is_pickup** | **bool** | Is set to true, if the order is not sent to the buyer, but the buyer will pick it up himself. | 
**shipment_offer_ids** | **string[]** | List of all available shipment offers. | [optional] 
**aftertax_total** | [**\Unifysell\SDK\Model\Money**](Money.md) |  | 
**increment_id** | **string** | The magento identifier to the order. | [optional] 
**date_cancelled** | **string** | If the order is cancelled, the time when the cancelation happend. | [optional] 
**refund_requested** | **bool** | Defines if a refund was requested. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

