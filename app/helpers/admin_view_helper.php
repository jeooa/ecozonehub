<?php
if (!function_exists('admin_view_layout')) {
    function admin_view_layout(string $section = 'administrator')
    {
        if (!function_exists('check_admin_auth')) {
            require_once __DIR__ . '/auth_helper.php';
        }

        check_admin_auth();

        $parts = ['header', 'navbar', 'sidebar', 'footer', 'script'];
        $base = __DIR__ . "/../views/{$section}/includes";

        foreach ($parts as $part) {
            $file = "$base/$part.php";
            if (file_exists($file)) {
                include $file;
            }
        }
    }
}
