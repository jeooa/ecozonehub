<?php

$router->get('/', 'HomeController@index');
$router->get('/administrator/dashboard', 'AdministratorController@dashboard');
$router->get('/administrator/users', 'AdministratorController@users');
$router->get('/', 'HomeController@dashboard');