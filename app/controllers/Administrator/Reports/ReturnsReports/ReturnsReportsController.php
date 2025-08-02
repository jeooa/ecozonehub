<?php
namespace App\Controllers\Administrator\Reports\returnsReports;

use App\Core\Controller;

class ReturnsReportsController extends Controller
{
    public function index()
    {
        $this->view("administrator/reports/returnsReports/returnsReports");
    }
}