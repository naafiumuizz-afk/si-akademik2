<?php

namespace App\Controllers;

class DashboardController
{
    // GET /dashboard (dilindungi AuthMiddleware)
    public function index()
    {
        $username = $_SESSION['username'] ?? 'Guest';
        require BASE_PATH . '/app/Views/dashboard/index.php';
    }
}
