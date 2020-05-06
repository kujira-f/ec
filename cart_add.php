<?php

require_once(dirname(__FILE__)."/classes/ec/product.php");
require_once(dirname(__FILE__)."/classes/ec/cart.php");

$product = new Product($_POST['pid']);
$cart = new Cart();
$cart->addProduct($product);

header('Location: /cart_list.php');

?>
