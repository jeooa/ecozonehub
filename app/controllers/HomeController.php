<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        $this->view("welcome");
    }
}
