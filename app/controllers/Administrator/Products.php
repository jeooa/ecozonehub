<?php
namespace App\Controllers\Administrator;

use App\Core\Controller;

class Products extends Controller
{
    public function index()
    {
        $this->view("administrator/products");
    }
}