<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/4/2018
 * Time: 12:59 PM
 */
require 'vendor/autoload.php';
include 'index.php';
//displays the items in cart
//full cart contents.
//This response should contain an array of all cart items and cart totals.
//A good place to show this data would be on the cart or orders page, or even a widget in the header of your website.

$items = $moltin->cart()->items();

print_r($items);

?>