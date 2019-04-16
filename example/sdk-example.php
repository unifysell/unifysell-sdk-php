<?php

require 'vendor/autoload.php';

$cListing = new \Unifysell\SDK\Model\CreateListingRequest([
    'availability' => 1,
    'category_ids' => [5],
    'condition' => \Unifysell\SDK\Model\CreateListingRequest::CONDITION_ORIGINAL_PACKAGE,
    'date_finished' => null,
    'date_started' => new \DateTime('+5 minutes'),
    'delivery' => '',
    'delivery_options' => null,
    'description' => '',
    'marketplace_id' => 120,
    'payment_description' => '',
    'pictures' => null,
    'price' => new \Unifysell\SDK\Model\Money(
        [
            'amount' => 1.2,
            'currency' => 'CHF',
            'precision_factor' => 1
        ]
    ),
    'promotions' => null, //promote e.g. a picture
    'quantity' => 1,
    'seller_sku' => 'abc',
    'template_id' => null, //a description template can be used here
    'title' => 'title',
    'warranty' => \Unifysell\SDK\Model\CreateListingRequest::WARRANTY_SEE_DESCRIPTION,
    'warrantyDescription' => ''
]);

echo $cListing;
