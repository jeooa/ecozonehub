<?php

if (!function_exists('is_active')) {
    function is_active(string $path, bool $partial = false): string
    {
        // Normalize current path: remove /public and project base dir
        $currentPath = preg_replace(
            '#^' . preg_quote(preg_replace('#/public$#', '', rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/')), '#') . '#',
            '',
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
        );

        $path = '/' . ltrim($path, '/');

        return $partial
            ? (str_contains($currentPath, $path) ? 'active' : '')
            : ($currentPath === $path ? 'active' : '');
    }
}
