<?php
namespace App\Controllers\Administrator;

use App\Core\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $this->view("administrator/dashboard");
    }
}

