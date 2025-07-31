<?php

$router->get('/', 'HomeController@index');
$router->get('/administrator/dashboard', 'Administrator\Dashboard@index');
$router->get('/administrator/products', 'Administrator\products@index');
$router->get('/administrator/categories', 'Administrator\categories@index');
$router->get('/administrator/stockin', 'Administrator\stockin@index');
$router->get('/administrator/sales', 'Administrator\sales@index');
$router->get('/administrator/returns', 'Administrator\returns@index');
$router->get('/administrator/damages', 'Administrator\damages@index');
$router->get('/administrator/suppliers', 'Administrator\suppliers@index');
$router->get('/', 'HomeController@dashboard');
$router->get('/administrator/pos', 'Administrator\Pos\PosController@index');