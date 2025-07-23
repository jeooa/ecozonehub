<?php
require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();


require_once __DIR__ . '/../routes/web.php';

$uri = $_GET['url'] ?? '/';
$method = $_SERVER['REQUEST_METHOD'];

$router->dispatch($method, $uri);
