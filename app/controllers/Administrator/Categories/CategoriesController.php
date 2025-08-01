<?php
namespace App\Controllers\Administrator\Categories;

use App\Core\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $this->view("administrator/categories/categories");
    }
}