<?php
if (!function_exists('admin_view_include')) {
    function admin_view_include(string $path)
    {
        include __DIR__ . "/../views/{$path}.php";
    }
}

if (!function_exists('admin_view_layout')) {
    function admin_view_layout(string $section = 'administrator')
    {
        $parts = ['header', 'navbar', 'sidebar', 'footer', 'script'];
        $base = __DIR__ . "/../views/{$section}/includes";

        foreach ($parts as $part) {
            $file = "$base/$part.php";
            if (file_exists($file))
                include $file;
        }
    }
}
