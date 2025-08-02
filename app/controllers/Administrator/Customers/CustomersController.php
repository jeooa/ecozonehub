<?php
namespace App\Controllers\Administrator\Customers;

use App\Core\Controller;

class CustomersController extends Controller
{
    public function index()
    {
        $this->view("administrator/customers/customers");
    }
}