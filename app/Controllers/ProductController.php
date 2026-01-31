<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $productModel = new Product();
        $products = $productModel->all();
        include "views/product_list.php";
    }

    public function detail() {
        $id = $_GET['id'] ?? null;
        $productModel = new Product();
        $product = $productModel->find($id);
        include "views/product_detail.php";
    }

    public function create() {
        include "views/product_add.php";
    }

    public function store() {
        $data = [
            'name' => $_POST['name'] ?? '',
            'price' => $_POST['price'] ?? '',
            'description' => $_POST['description'] ?? ''
        ];

        if (empty($data['name']) || empty($data['price'])) {
            die("Vui lòng nhập đầy đủ thông tin");
        }

        $productModel = new Product();
        $productModel->insert($data);

        header("Location: index.php?page=product-list");
    }

    // 👉 HIỂN THỊ FORM SỬA
    public function edit() {
        $id = $_GET['id'] ?? null;
        $productModel = new Product();
        $product = $productModel->find($id);

        include "views/product_edit.php";
    }

    // 👉 XỬ LÝ CẬP NHẬT
    public function update() {
        $id = $_GET['id'] ?? null;

        $data = [
            'name' => $_POST['name'] ?? '',
            'price' => $_POST['price'] ?? '',
            'description' => $_POST['description'] ?? ''
        ];

        $productModel = new Product();
        $productModel->update($id, $data);

        header("Location: index.php?page=product-list");
    }

    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $productModel = new Product();
            $productModel->delete($id);
        }
        header("Location: index.php?page=product-list");
    }
}

