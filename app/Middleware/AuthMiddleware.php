<?php

namespace App\Middleware;

class AuthMiddleware
{
    /**
     * Cek apakah user sudah login.
     * Jika belum, redirect ke /login dan hentikan eksekusi.
     */
    public static function handle()
    {
        if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
            header('Location: ' . APP_URL . '/login');
            exit;
        }
    }
}
