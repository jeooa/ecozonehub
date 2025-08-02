<?php
namespace App\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];


    public function get($uri, $action)
    {
        $this->routes['GET'][$this->normalize($uri)] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$this->normalize($uri)] = $action;
    }

    public function dispatch($method, $uri)
    {
        $uri = $this->normalize($uri);

        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            (new \App\Controllers\Errors\ErrorController)->notFound();
            exit;
        }

        $action = $this->routes[$method][$uri];
        list($controllerName, $methodName) = explode('@', $action);

        $controllerClass = "App\\Controllers\\" . str_replace(['/', '\\'], '\\', $controllerName);

        if (!class_exists($controllerClass) || !method_exists($controllerClass, $methodName)) {
            http_response_code(500);
            $errorController = new \App\Controllers\Errors\ErrorController();
            $errorController->internalError();
            exit;
        }

        $controller = new $controllerClass();
        call_user_func([$controller, $methodName]);
    }


    protected function normalize($uri)
    {
        return '/' . trim($uri, '/');
    }
}
