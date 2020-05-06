<?php
require_once (dirname(__FILE__)."/classes/ec/product_manager.php");

$productManager = new ProductManager();
$products = $productManager->getProducts();
?>
<html>
<head>
<title>商品一覧</title>
</head>
<body>

<table>
<tr>
<th>商品名</th>
<th>価格</th>
</tr>

<?php foreach ($products as $product) { ?>
<tr>
<th><a href="/detail.php?pid=<?php echo $product[0]; ?>"><?php echo $product[1]; ?></a></th>
<th><?php echo $product[2]; ?></th>
</tr>
<?php } ?>

</table>

</body>
</html>
