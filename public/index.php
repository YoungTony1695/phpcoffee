<?php
// Autoload các lớp
spl_autoload_register(function ($class_name) {
    include '../app/controllers/' . $class_name . '.php';
});

// Tạo đối tượng và gọi phương thức
$homeController = new HomeController();
$homeController->index();
