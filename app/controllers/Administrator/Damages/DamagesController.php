<?php
namespace App\Controllers\Administrator\Damages;

use App\Core\Controller;

class DamagesController extends Controller
{
    public function index()
    {
        $this->view("administrator/damages/damages");
    }
}