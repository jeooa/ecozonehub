<?php
namespace App\Controllers\Administrator;

use App\Core\Controller;

class Damages extends Controller
{
    public function index()
    {
        $this->view("administrator/damages");
    }
}