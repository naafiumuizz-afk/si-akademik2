<?php

class AuthMiddleware
{
    public static function check()
    {
        // Jika tidak ada session 'user_logged_in', arahkan paksa ke halaman login
        if (!isset($_SESSION['user_logged_in'])) {
            // Gunakan path absolut agar selalu diarahkan ke root public
            header("Location: /si-akademik/public/login");
            exit;
        }
    }
}