<?php
namespace App\Controllers;

use App\Core\Controller;
class ErrorController extends Controller
{
    public function notFound()
    {
        http_response_code(404);
        $this->view('errors/404');

    }

    public function internalError()
    {
        http_response_code(500);
        $this->view('errors/500');
    }
    public function forbidden()
    {
        http_response_code(403);
        $this->view('errors/403');
    }
    public function maintenance()
    {
        http_response_code(503);
        $this->view('errors/maintenance');
    }
}
