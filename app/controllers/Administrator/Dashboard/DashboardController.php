<?php

namespace App\Controllers\Administrator\Dashboard;

use App\Core\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $this->view("administrator/dashboard/dashboard");
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        header('Location: ' . baseurl() . '/administrator/login');
        exit;
    }
}
