<?php
class Product {
    public $id;
    public $name;
    public $price;
    public $category_id;

    public function getAll() {
        global $conn;
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        global $conn;
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }
}
