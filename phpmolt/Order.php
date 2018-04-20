<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/4/2018
 * Time: 1:31 PM
 */
//Convert to order
//When the customer is ready to checkout we need to convert the cart to an order.
//This call lets you define the payment gateway and conditional order parameters such as customer, billing and shipping addresses.
//
//This call will return an object containing data for the newly created order.
require 'vendor/autoload.php';
include 'index.php';

echo "DON"T UNCOMMENT!!! IT WORKS PERFECTLY!!!";
//$order = $moltin->cart()->checkout(
//    [
//        'name'  => 'Jon Doe',
//        'email' => 'jon.doe@gmail.com'
//    ],
//    [
//        'first_name' => 'Jon',
//        'last_name' => 'Doe',
//        'line_1' => '123 Sunny Street',
//        'line_2' => 'Sunnycreek',
//        'county' => 'California',
//        'postcode' => 'CA94040',
//        'country' => 'US'
//    ]
//);
//print_r($order);
?>
<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>Id</th>-->
<!--        <th>Name</th>-->
<!--        <th>Description</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php
//    foreach ($order as $orders) {
//        if($orders!=null){
//            ?>
<!--            <tr>-->
<!--                <td>--><?//=$orders->first_name?><!--</td>-->
<!--                <td>--><?//=$orders->email?><!--</td>-->
<!---->
<!--            </tr>-->
<!--            --><?php
//        }
//    }
//    ?>
<!--    </tbody>-->
<!--</table>-->
