<?php
namespace App\Controllers\Administrator;

use App\Core\Controller;

class Stockin extends Controller
{
    public function index()
    {
        $this->view("administrator/stockin");
    }
}