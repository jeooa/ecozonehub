<?php
namespace App\Controllers\Administrator\Sales;

use App\Core\Controller;

class SalesController extends Controller
{
    public function index()
    {
        $this->view("administrator/sales/sales");
    }
}