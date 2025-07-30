<?php
namespace App\Controllers\Administrator;

use App\Core\Controller;

class Suppliers extends Controller
{
    public function index()
    {
        $this->view("administrator/suppliers");
    }
}