<?php
namespace App\Controllers\Administrator\Reports\InventoryReports;

use App\Core\Controller;

class InventoryReportsController extends Controller
{
    public function index()
    {
        $this->view("administrator/reports/inventoryReports/inventoryReports");
    }
}