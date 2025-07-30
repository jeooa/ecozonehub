<?php
namespace App\Controllers\Administrator;

use App\Core\Controller;

class Returns extends Controller
{
    public function index()
    {
        $this->view("administrator/returns");
    }
}