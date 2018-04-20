<?php
require 'vendor/autoload.php';
$title= 'index';
$moltin = new Moltin\Client([
  'client_id'     => 'AQTKmhBJY1h412IJe7i6fyyNWiwR98HjqQK0RcEJTX',
  'client_secret' => 'lHt1wFkPCo8Bne2RQzFKT3DTu2VFg203h9UyO4GRK3'
]);


//echo 'This is index page';
?>

<a href="index.php">Index</a>

<a href="Product.php">Product</a>

<a href="Cart.php">Cart</a>

<a href="Order.php">Order</a>

<a href="ProcessOrder.php">Process Order</a>
