<?php

if (!function_exists('is_active')) {
    function is_active(string $path, bool $partial = false): string
    {
        $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $base = '/Ecozonehub'; // adjust if project folder name changes
        $path = $base . $path;

        if ($partial) {
            return str_contains($currentPath, $path) ? 'active' : '';
        }

        return $currentPath === $path ? 'active' : '';
    }
}
