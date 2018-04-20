<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/4/2018
 * Time: 2:49 PM
 */
require 'vendor/autoload.php';
include 'index.php';
//include 'Order.php';
//Once we’ve converted a cart into an order we’re now ready to process a payment.
//In this example, we’ve used the dummy gateway so we just need to provide some card details.
//The data you need to provide in this step depends on your chosen gateway.

$order = $moltin->cart()->checkout(
    [
        'name'  => 'Jon Doe',
        'email' => 'jon.doe@gmail.com'
    ],
    [
        'first_name' => 'Jon',
        'last_name' => 'Doe',
        'line_1' => '123 Sunny Street',
        'line_2' => 'Sunnycreek',
        'county' => 'California',
        'postcode' => 'CA94040',
        'country' => 'US'
    ]
);

$payment = $order->pay('stripe', 'purchase', [
    'first_name' => 'Jon',
    'last_name' => 'Doe',
    'number' => '4242424242424242',
    'month' => 02,
    'year' => 2020,
    'verification_value' => 213
]);

echo "$payment[first_name];" //display name out and order stuff
?>