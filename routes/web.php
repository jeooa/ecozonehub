<?php

$router->get('/', 'HomeController@index');
$router->get('/administrator/dashboard', 'Administrator\Dashboard\DashboardController@index');
$router->get('/administrator/products', 'Administrator\Products\ProductsController@index');
$router->get('/administrator/categories', 'Administrator\Categories\CategoriesController@index');
$router->get('/administrator/stockin', 'Administrator\Stockin\StockinController@index');
$router->get('/administrator/sales', 'Administrator\Sales\SalesController@index');
$router->get('/administrator/returns', 'Administrator\Returns\ReturnsController@index');
$router->get('/administrator/damages', 'Administrator\Damages\DamagesController@index');
$router->get('/administrator/suppliers', 'Administrator\Suppliers\SuppliersController@index');
$router->get('/', 'HomeController@dashboard');
$router->get('/administrator/pos', 'Administrator\Pos\PosController@index');

$router->get('administrator/login', 'Administrator\Login@index');
$router->post('administrator/login/authenticate', 'Administrator\Login@authenticate');
$router->get('administrator/logout', 'Administrator\Login@logout');




