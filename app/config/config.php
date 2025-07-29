<?php

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();

if (!defined('BASE_URL'))
    define('BASE_URL', $_ENV['APP_URL']);
if (!defined('DB_HOST'))
    define('DB_HOST', $_ENV['DB_HOST']);
if (!defined('DB_NAME'))
    define('DB_NAME', $_ENV['DB_NAME']);
if (!defined('DB_USER'))
    define('DB_USER', $_ENV['DB_USER']);
if (!defined('DB_PASS'))
    define('DB_PASS', $_ENV['DB_PASS']);
