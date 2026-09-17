<?php

require_once __DIR__ . '/../config/database.php';
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
    
// --- ROUTING CRUD DOSEN (Praktikum 4) ---
} elseif ($url === 'dosen') {
    AuthMiddleware::check(); 
    $controller = new DosenController();
    $controller->index();
} elseif ($url === 'dosen/create') {
    AuthMiddleware::check(); 
    $controller = new DosenController();
    $controller->create();
} elseif ($url === 'dosen/store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    AuthMiddleware::check(); 
    $controller = new DosenController();
    $controller->store();
} elseif ($url === 'dosen/edit' && isset($_GET['id'])) {
    AuthMiddleware::check(); 
    $controller = new DosenController();
    $controller->edit($_GET['id']);
} elseif ($url === 'dosen/update' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    AuthMiddleware::check(); 
    $controller = new DosenController();
    $controller->update($_GET['id']);
} elseif ($url === 'dosen/delete' && isset($_GET['id'])) {
    AuthMiddleware::check(); 
    $controller = new DosenController();
    $controller->delete($_GET['id']);
} else {
    echo "404 - Halaman tidak ditemukan.";
}