<?php
namespace App\Controllers\Administrator;

use App\Core\Controller;

class Sales extends Controller
{
    public function index()
    {
        $this->view("administrator/sales");
    }
}