<?php
if (!function_exists('home_view_layout')) {
    function home_view_layout(array $parts = ['header', 'footer'])
    {
        $base = __DIR__ . "/../views/layouts";

        foreach ($parts as $part) {
            $file = "$base/$part.php";
            if (file_exists($file))
                include $file;
        }
    }
}
