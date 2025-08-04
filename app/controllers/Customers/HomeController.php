<?php
namespace App\Controllers\Customers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        $this->view("customers/home");
    }
}
