<?php
require_once(dirname(__FILE__)."/classes/ec/cart.php");
require_once(dirname(__FILE__)."/classes/ec/product.php");

$cart = new Cart();
$products = $cart->getProducts();
?>
<html>
<head>
<title>カート</title>
</head>
<body>

<table>
<tr>
<th>商品名</th>
<th>価格</th>
<th>削除</th>
</tr>

<?php
$total = 0;
foreach ($products as $cartProductId => $product) {
    $total += $product->getPrice();
?>
<tr>
<td><a href="/detail.php?pid=<?php echo $product->getId(); ?>"><?php echo $product->getName(); ?></a></td>
<td><? php echo $product->getPrice(); ?>円</td>
<td>
<form method="post" action="cart_remove.php">
<input type="submit" value="削除">
<input type="hidden" name="cart_product_id" value="<?php echo $cartProductId; ?>">
</form>
</td>
</tr>
<?php } ?>

<tr>
<th colspan="3">合計</th>
<th><?php echo $total; ?>円</th>
</tr>

</table>

</body>
</html>
