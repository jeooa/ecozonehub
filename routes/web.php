<?php
//Administrator Routing
$router->get('/', 'Customers\HomeController@dashboard');
$router->get('/administrator/dashboard', 'Administrator\Dashboard\DashboardController@index');
$router->get('/administrator/products', 'Administrator\Products\ProductsController@index');
$router->get('/administrator/categories', 'Administrator\Categories\CategoriesController@index');
$router->get('/administrator/stockin', 'Administrator\Stockin\StockinController@index');
$router->get('/administrator/sales', 'Administrator\Sales\SalesController@index');
$router->get('/administrator/returns', 'Administrator\Returns\ReturnsController@index');
$router->get('/administrator/damages', 'Administrator\Damages\DamagesController@index');
$router->get('/administrator/suppliers', 'Administrator\Suppliers\SuppliersController@index');
$router->get('/administrator/customers', 'Administrator\Customers\CustomersController@index');
$router->get('/administrator/inventoryReports', 'Administrator\Reports\InventoryReports\InventoryReportsController@index');
$router->get('/administrator/salesReports', 'Administrator\Reports\salesReports\SalesReportsController@index');
$router->get('/administrator/returnsReports', 'Administrator\Reports\returnsReports\ReturnsReportsController@index');
$router->get('/administrator/pos', 'Administrator\Pos\PosController@index');


//Administator Login and Logout Routing
$router->get('administrator/login', 'Administrator\Login\Login@index');
$router->post('administrator/login/authenticate', 'Administrator\Login\Login@authenticate');
$router->get('administrator/logout', 'Administrator\Login\Login@logout');








