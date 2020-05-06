<?php

require_once(dirname(__FILE__)."/abstract_data.php");

class Product extends AbstractData
{
    private $productInfo;

    public function __construct($productId)
    {
        parent::__construct();
        $sql = "SELECT * FROM products WHERE product_id = " . $productId;
        $this->productInfo = $this->query($sql);
    }

    public function getId()
    {
        return $this->productInfo['product_id'];
    }

    public function getName()
    {
        return $this->productInfo['product_name'];
    }

    public function getPrice()
    {
        return $this->productInfo['price'];
    }
}

?>
