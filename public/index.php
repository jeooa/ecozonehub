<?php
require_once __DIR__ . '/../app/bootstrap.php';

use App\Core\Router;

$router = new Router();


require_once __DIR__ . '/../routes/web.php';

$uri = $_GET['url'] ?? '/';
$method = $_SERVER['REQUEST_METHOD'];

$router->dispatch($method, $uri);

// Toggle maintenance mode here
// $isMaintenance = false;

// if ($isMaintenance) {
//     $controller = new \App\Controllers\ErrorController();
//     $controller->maintenance();
//     exit;
// }