<?php
/**
 * routes/web.php
 * Daftar route aplikasi + proses dispatch ke Controller
 */

use App\Middleware\AuthMiddleware;

$method = $_SERVER['REQUEST_METHOD'];

// Format key: "METHOD /uri" => [Controller, method, perluLogin(true/false)]
$routes = [
    'GET /login'          => ['App\\Controllers\\AuthController', 'showLogin', false],
    'POST /login/process' => ['App\\Controllers\\AuthController', 'login', false],
    'GET /logout'         => ['App\\Controllers\\AuthController', 'logout', false],

    'GET /dashboard'      => ['App\\Controllers\\DashboardController', 'index', true],
    'GET /mahasiswa'      => ['App\\Controllers\\MahasiswaController', 'index', true],
    'GET /dosen'          => ['App\\Controllers\\DosenController', 'index', true],
];

$key = $method . ' ' . $uri;

if (array_key_exists($key, $routes)) {
    [$controllerClass, $action, $needsAuth] = $routes[$key];

    // Jalankan middleware dulu jika route butuh login
    if ($needsAuth) {
        AuthMiddleware::handle();
    }

    $controller = new $controllerClass();
    $controller->$action();
} else {
    http_response_code(404);
    echo '<h1>404</h1><p>Halaman tidak ditemukan: ' . htmlspecialchars($uri) . '</p>';
}
