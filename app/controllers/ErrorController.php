<?php
namespace App\Controllers;

class ErrorController
{
    public function notFound()
    {
        http_response_code(404);
        include __DIR__ . '/../views/errors/404.php';

    }
}
