<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();

// Load defined routes
require_once __DIR__ . '/../routes/web.php';

// Get the request URI
$uri = $_GET['url'] ?? '/';
$method = $_SERVER['REQUEST_METHOD'];

// Dispatch the route
$router->dispatch($method, $uri);
