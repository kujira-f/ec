<?php

require_once(dirname(__FILE__)."/abstract_data.php");

class ProductManager extends AbstractData
{
    public function getProducts()
    {
        $sql = "SELECT * FROM products";
        return $this->query($sql);
    }
}

?>
