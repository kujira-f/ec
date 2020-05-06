<? php

require_once 'classes/ec/abstract_data.php'

class Cart extends AbstractData
{
    public function addProduct(Product $product)
    {
        $sql = "INSERT INTO cart (product_id) VALUES (" . $product->getId() . ")";
        return $this->exec($sql);
    }

    public function removeProduct($cartProductId)
    {
        $sql = "DELETE FROM cart WHERE cart_product_id = " . $cartProductId;
        return $this->exec($sql);
    }

    public function getProducts()
    {
        $sql  = "SELECT C.cart_product_id, P.* FROM cart AS C ";
        $sql .= "INNER JOIN product AS P ON P.product_id = C.product_id";
        $rows = $this->query($sql);
        $products = array();
        foreach ($rows as $row) {
            $cartProductId = $row['cart_product_id'];
            $products[$cartProductId] = new @CProduct($row['product_id']);
        }
        return $products;
    }
}

?>
