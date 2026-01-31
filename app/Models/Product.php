<?php
namespace App\Models;

class Product extends BaseModel {

    public function all() {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function find($id) {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function delete($id) {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
    public function insert($data) {
        $sql = "INSERT INTO products (name, price, image, description)
                VALUES (:name, :price, :image, :description)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':name' => $data['name'],
            ':price' => $data['price'],
            ':image' => $data['image'],
            ':description' => $data['description'],
        ]);
    }
    public function update($id, $data) {
        $sql = "UPDATE products 
                SET name = :name, price = :price, description = :description
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':name' => $data['name'],
            ':price' => $data['price'],
            ':description' => $data['description'],
            ':id' => $id
        ]);
}



}
