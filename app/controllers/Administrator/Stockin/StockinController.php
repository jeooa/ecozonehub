<?php
namespace App\Controllers\Administrator\Stockin;

use App\Core\Controller;

class StockinController extends Controller
{
    public function index()
    {
        $this->view("administrator/stockin/stockin");
    }
}
