<?php
namespace App\Controllers\Administrator\Main;

use App\Core\Controller;

class AdministratorController extends Controller
{
    public function index()
    {
        redirect('/administrator/dashboard');
    }
}
