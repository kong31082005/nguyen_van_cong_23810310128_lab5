<?php
namespace App\Models;

class Product extends BaseModel
{
    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        return $this->pdo->query($sql)->fetchAll();
    }
}
