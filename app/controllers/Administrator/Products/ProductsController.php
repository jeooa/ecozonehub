<?php
namespace App\Controllers\Administrator\Products;

use App\Core\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $this->view("administrator/products/products");
    }
}