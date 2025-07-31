<?php
namespace App\Controllers\Administrator;

use App\Core\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $this->view("administrator/dashboard");
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        header('Location: ' . baseurl() . '/administrator/login');
        exit;
    }
}

