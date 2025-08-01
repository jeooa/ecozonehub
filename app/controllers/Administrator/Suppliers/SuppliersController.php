<?php
namespace App\Controllers\Administrator\Suppliers;

use App\Core\Controller;

class SuppliersController extends Controller
{
    public function index()
    {
        $this->view("administrator/suppliers/suppliers");
    }
}