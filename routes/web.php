<?php

$router->get('/', 'HomeController@index');
$router->get('/administrator/dashboard', 'Administrator\Dashboard@index');
// $router->get('/administrator/dashboard', 'AdministratorController@dashboard');
// $router->get('/administrator/users', 'AdministratorController@users');
$router->get('/', 'HomeController@dashboard');
$router->get('/administrator/pos', 'Administrator\Pos\PosController@index');
