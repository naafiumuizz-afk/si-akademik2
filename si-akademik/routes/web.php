<?php

require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

// Ambil URL dari .htaccess, hilangkan garis miring di akhir
$url = $_GET['url'] ?? '';
$url = rtrim($url, '/');

// Sistem Routing
if ($url === 'login') {
    $controller = new AuthController();
    $controller->index();
} elseif ($url === 'login-process') {
    $controller = new AuthController();
    $controller->process();
} elseif ($url === 'logout') {
    $controller = new AuthController();
    $controller->logout();
} elseif ($url === '' || $url === 'dashboard') {
    AuthMiddleware::check(); // Lindungi halaman ini
    $controller = new HomeController();
    $controller->index();
} elseif ($url === 'mahasiswa') {
    AuthMiddleware::check(); // Lindungi halaman ini
    $controller = new MahasiswaController();
    $controller->index();
} elseif ($url === 'mahasiswa/detail') {
    AuthMiddleware::check(); // Lindungi halaman ini
    $controller = new MahasiswaController();
    $controller->detail();
} elseif ($url === 'dosen') {
    AuthMiddleware::check(); // Lindungi halaman ini
    $controller = new DosenController();
    $controller->index();
} else {
    echo "404 - Halaman tidak ditemukan.";
}