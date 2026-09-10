<?php

namespace App\Controllers;

class AuthController
{
    // GET /login
    public function showLogin()
    {
        // Kalau sudah login, langsung lempar ke dashboard
        if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
            header('Location: ' . APP_URL . '/dashboard');
            exit;
        }

        $error = $_SESSION['error'] ?? null;
        unset($_SESSION['error']);

        require BASE_PATH . '/app/Views/auth/login.php';
    }

    // POST /login/process
    public function login()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === 'admin' && $password === '12345') {
            // Login berhasil -> simpan status di session
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            header('Location: ' . APP_URL . '/dashboard');
            exit;
        }

        // Login gagal
        $_SESSION['error'] = 'Username atau password salah.';
        header('Location: ' . APP_URL . '/login');
        exit;
    }

    // GET /logout
    public function logout()
    {
        // Hapus semua data session
        $_SESSION = [];
        session_unset();
        session_destroy();

        header('Location: ' . APP_URL . '/login');
        exit;
    }
}
