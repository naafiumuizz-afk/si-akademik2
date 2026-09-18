<?php

namespace App\Middleware;

class AuthMiddleware
{
    public static function handle()
    {
        if (!isset($_SESSION['login'])) {
            header('Location: http://localhost/si-akademik/public/login');
            exit;
        }
    }
}