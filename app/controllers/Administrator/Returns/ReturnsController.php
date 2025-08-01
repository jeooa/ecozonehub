<?php
namespace App\Controllers\Administrator\Returns;

use App\Core\Controller;

class ReturnsController extends Controller
{
    public function index()
    {
        $this->view("administrator/returns/returns");
    }
}