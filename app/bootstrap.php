<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config/config.php';

foreach (glob(__DIR__ . '/helpers/*.php') as $file)
    require_once $file;
