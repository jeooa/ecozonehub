<?php

if (!function_exists('asset')) {
    function asset(string $path): string
    {
        return baseurl() . '/' . ltrim($path, '/');
    }
}
