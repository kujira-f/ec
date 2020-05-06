<?php
require_once(dirname(__FILE__)."/classes/ec/product.php");

$product = new Product($_GET['pid']);

?>
<html>
<head>
<title>商品詳細</title>
</head>
<body>

<table>
<tr>
<td>商品名</td>
<td>商品画像</td>
<td>価格</td>
</tr>
<tr>
<td><?php echo $product->getName(); ?></td>
<td><img src="/images/product/<?php echo $product->getId(); ?>.jpg"></td>
<td><?php echo $product->getPrice(); ?>円</td>
</tr>
</table>

<form method="post" action="/cart_add.php">
<input type="submit" value="カートに追加">
<input type="hidden" name="pid" value="<?php echo $product->getId(); ?>">
</form>

</body>
</html>
