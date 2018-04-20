
<?php
require 'vendor/autoload.php';
include 'index.php';

echo "<br>";

//$opts = array(
//    'http' => array(
//        'method' => "GET"
//    )
//);
//
//$caPathOrFile = \Composer\CaBundle\CaBundle::getSystemCaRootBundlePath();
//if (is_dir($caPathOrFile) || (is_link($caPathOrFile) && is_dir(readlink($caPathOrFile)))) {
//    $opts['ssl']['capath'] = $caPathOrFile;
//} else {
//    $opts['ssl']['cafile'] = $caPathOrFile;
//}
//
//$context = stream_context_create($opts);
//$result = file_get_contents('https://example.com', false, $context);

$products = $moltin->products->all()->data();
print_r ($products);
//echo $array[0][1];

?>
<!--    <table>-->
<!--		<thead>-->
<!--		  <tr>-->
<!--            <th>Image</th>-->
<!--			<th>Id</th>-->
<!--			<th>Name</th>-->
<!--			<th>Description</th>-->
<!--            <th-->
<!--		  </tr>-->
<!--		</thead>-->
<!--		<tbody>-->
<!--			--><?php
//				foreach ($products as $product) {
//				if($product!=null){
//					?>
<!--					<tr>-->
<!--                        <td>--><?//=$product->main_image?><!--</td>//-->
<!--					     <td>--><?//=$product->id?><!--</td>-->
<!--					     <td>--><?//=$product->name?><!--</td>-->
<!--                        <td>--><?//=$product->description?><!--</td>-->
<!--                        <td>--><?//=$product->currency?><!--</td>//-->
<!--                        <td>--><?//=$product->amount?><!--</td>//-->
<!--					</tr>-->
<!--					--><?php
//				}
//			}
//			?>
<!--		</tbody>-->
<!--    </table>-->
<?php
//3=> the number of items wanting to get
// can add more variables such as size/color

//Using a product ID we can insert a quantity of this product into the cart with one simple request.
//The first parameter passed is the product ID, the second the quantity to be added to the cart.
//A third parameter can be added for modifiers and variations (e.g. size and color) if these are set up.
//
//This response should contain an array of the individual cart item data e.g. title, quantity, price.
//A good example of integrating this would be to add a simple button or form to the product page that posts the product ID and quantity to this endpoint


//$moltin->cart()->addProduct($productID, 3);

//$productID = "efac648b-a054-4454-b17a-fe72cde69fe4";
//$moltin->cart()->addProduct($productID, 3); //button to add

//session_start();
//$_SESSION['capnum'] = ((isset($_SESSION['capnum'])) ? $_SESSION['capnum'] : 0);
//if(isset($_GET['add'])){
//    $_SESSION['capnum']++;
//}
//?>
<!--<form action="--><?// echo $_SERVER['PHP_SELF']; ?><!--" method="get">-->
<!--    <input type="submit" name="add" value="add" />-->
<!--</form>-->
<?//
//echo $_SESSION['capnum'];


?>

<button>Add to Cart</button><br>
<a href="Cart.php">Cart</a>






