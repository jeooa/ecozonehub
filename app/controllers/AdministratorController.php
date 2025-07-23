<?php
namespace App\Controllers;

use App\Core\Controller;

class AdministratorController extends Controller
{
    public function dashboard()
    {
        $this->view("administrator/dashboard");
    }

    public function users()
    {
        $this->view("administrator/users");
    }
}
