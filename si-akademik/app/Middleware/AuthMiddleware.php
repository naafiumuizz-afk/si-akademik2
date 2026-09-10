<?php

class AuthMiddleware
{
    public static function check()
    {
        // Jika tidak ada session 'user_logged_in', arahkan paksa ke halaman login
        if (!isset($_SESSION['user_logged_in'])) {
            header("Location: login");
            exit;
        }
    }
}