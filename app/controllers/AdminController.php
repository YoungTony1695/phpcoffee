<?php
class AdminController {
    public function productList() {
        $productModel = new Product();
        $products = $productModel->getAll();
        include_once '../app/views/admin/product_list.php';
    }

    public function addProduct() {
        include_once '../app/views/admin/add_product.php';
    }

    public function editProduct($id) {
        $productModel = new Product();
        $product = $productModel->getById($id);
        include_once '../app/views/admin/edit_product.php';
    }

    public function deleteProduct($id) {
        global $conn;
        $sql = "DELETE FROM products WHERE id = $id";
        $conn->query($sql);
        header('Location: /admin/product-list');
    }
}
