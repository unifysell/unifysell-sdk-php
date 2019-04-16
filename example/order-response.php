<?php
/**
 * unifysell GbR
 * Zschopauer Str. 159
 * 09126 Chemnitz
 * Germany
 *
 * Web: https://unifysell.de
 * Phone: +49 176 270 68 7 68
 * Mail: info@unifysell.de
 * USt-IdNr.: DE315094601
 *
 * @author Christian Staude <c.staude@nepda.eu>
 * @author Nepomuk Fraedrich <info@nepda.eu>
 * @author Thomas Rueckert <t.rueckert@nepda.eu>
 * @copyright 2018 unifysell - Christian Staude, Nepomuk Frädrich, Thomas Rückert GbR
 */

require 'vendor/autoload.php';

$response = new \Unifysell\SDK\Model\OrderResponse([
    'meta' => new \Unifysell\SDK\Model\Meta([
        'pagination' => new \Unifysell\SDK\Model\Pagination([
            'page' => 1,
            'page_size' => 1,
            'total_pages' => 1000
        ])
    ]),
    'data' => new \Unifysell\SDK\Model\Order([
        'aftertax_total' => new \Unifysell\SDK\Model\Money([
            'amount' => 1,
            'currency' => 'string',
            'precision_factor' => 1
        ]),
        'amazon_order_id' => '403-7788141-6748361',
        'buyer_id' => 1,
        'comment_client' => 'string',
        'comment_merchant' => 'string',
        'date_approved' => 'string',
        'date_cancelled' => 'string',
        'date_changed' => 'string',
        'date_created' => '2018-11-11T15:23:15Z',
        'date_paid' => 'string',
        'date_shipped' => 'string',
        'earliest_ship_date' => 'string',
        'ebay_order_id' => '161893097448-1411740399006',
        'ebay_payment_status' => 'string',
        'fulfillment_channel' => 'string',
        'hood_order_id' => 'string',
        'id' => 1,
        'increment_id' => 'string',
        'invoice_address_id' => 1,
        'invoice_no' => 'string',
        'is_ebay_plus' => true,
        'is_pickup' => true,
        'is_premium_order' => true,
        'is_prime' => true,
        'label_ids' => ['string', 'string'],
        'latest_ship_date' => 'string',
        'note' => 'string',
        'number_of_items_shipped' => 1,
        'number_of_items_unshipped' => 1,
        'order_id' => 'string',
        'order_no' => 'string',
        'order_type' => 'string',
        'package_service' => 'string',
        'payment_method' => 'string',
        'position_ids' => ['string', 'string'],
        'pretax_total' => new \Unifysell\SDK\Model\Money([
            'amount' => 1,
            'currency' => 'string',
            'precision_factor' => 1
        ]),
        'purchased_order_number' => 'string',
        'refund_requested' => true,
        'remote_allowed_shipping_methods' => ['string', 'string'],
        'sales_channel' => 'string',
        'seller_email' => 'string',
        'ship_method' => 'string',
        'ship_method_code' => 'string',
        'ship_service_level' => 'string',
        'shipment_increment_id' => 'string',
        'shipment_method' => 'string',
        'shipment_offer_ids' => ['string', 'string'],
        'shipment_offers_available' => true,
        'shipment_service_level_category' => 'string',
        'shipped_by_amazon_tfm' => true,
        'shipping_address_id' => 1,
        'shipping_cost' => new \Unifysell\SDK\Model\Money([
            'amount' => 1,
            'currency' => 'string',
            'precision_factor' => 1
        ]),
        'status' => 'shipped',
        'store_id' => 'string',
        'tracking_number_id' => 'string'
    ])
]);
echo $response;

echo PHP_EOL . $response->getData()->getAmazonOrderId();
echo PHP_EOL . $response->getData()->getEbayOrderId();
echo PHP_EOL . $response->getData()->getId();
echo PHP_EOL . $response->getData()->getDateCreated();
echo PHP_EOL . $response->getData()->getStatus();
