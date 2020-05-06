<?php

require_once(dirname(__FILE__)."/classes/ec/cart.php");

$cart = new Cart();
$cart->removeProduct($_POST['cart_product_id']);

header('Location: /cart_list.php');

?>
