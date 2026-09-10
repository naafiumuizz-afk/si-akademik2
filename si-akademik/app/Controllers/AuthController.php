<?php

class AuthController
{
    public function index()
    {
        // Tampilkan halaman login
        require_once __DIR__ . '/../Views/mahasiswa/login.php';
    }

    public function process()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Contoh validasi login (hardcoded). Username: admin, Password: admin123
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['user_logged_in'] = true;
            $_SESSION['username'] = $username;
            
            // Redirect ke halaman dashboard
            header("Location: dashboard");
            exit;
        } else {
            $error = "Username atau password salah!";
            require_once __DIR__ . '/../Views/mahasiswa/login.php';
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: login");
        exit;
    }
}