<?php
namespace App\Controllers\Administrator\Pos;

use App\Core\Controller;

class PosController extends Controller
{
    public function index()
    {
        $this->view("administrator/pos/pos");
    }
}
