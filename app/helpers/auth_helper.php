<?php

if (!function_exists('check_admin_auth')) {
    function check_admin_auth()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['admin'])) {
            header('Location: ' . baseurl() . '/administrator/login');
            exit;
        }
    }
}
