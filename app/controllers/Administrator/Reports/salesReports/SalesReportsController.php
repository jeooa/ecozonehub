<?php
namespace App\Controllers\Administrator\Reports\salesReports;

use App\Core\Controller;

class SalesReportsController extends Controller
{
    public function index()
    {
        $this->view("administrator/reports/salesReports/salesReports");
    }
}