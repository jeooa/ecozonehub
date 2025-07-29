<?php
namespace App\Controllers\Administrator;

use App\Core\Controller;

class Categories extends Controller
{
    public function index()
    {
        $this->view("administrator/categories");
    }
}