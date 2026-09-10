<?php
/**
 * Front Controller
 * Semua request masuk lewat file ini (berkat .htaccess)
 */

session_start();

define('BASE_PATH', dirname(__DIR__));

// Autoload sederhana untuk class di dalam folder app/
spl_autoload_register(function ($class) {
    $class = str_replace('App\\', '', $class);
    $path = BASE_PATH . '/app/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

// Ambil path URL yang diminta, buang query string
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Buang bagian folder dasar (misal /si-akademik/public) dari URL
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$basePath = $basePath === '/' ? '' : rtrim($basePath, '/');
define('APP_URL', $basePath);
if ($basePath !== '/' && $basePath !== '') {
    if (strpos($uri, $basePath) === 0) {
        $uri = substr($uri, strlen($basePath));
    }
}

// Normalisasi: pastikan selalu diawali '/' dan tidak ada trailing slash
$uri = '/' . trim($uri, '/');
if ($uri === '/') {
    $uri = '/login';
}

// Jalankan routing
require BASE_PATH . '/routes/web.php';
