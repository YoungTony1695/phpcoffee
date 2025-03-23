<?php
class UserController {
    public function login() {
        include_once '../app/views/login.php';
    }

    public function register() {
        include_once '../app/views/register.php';
    }

    public function logout() {
        session_destroy();
        header('Location: /');
    }
}
