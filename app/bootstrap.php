<?php

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once __DIR__ . '/config/config.php';

foreach (glob(__DIR__ . '/helpers/*.php') as $file)
    require_once $file;

check_maintenance_mode();
