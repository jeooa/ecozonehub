<?php

if (!function_exists('baseurl')) {
    function baseurl(): string
    {
        return BASE_URL;
    }
}

if (!function_exists('asset')) {
    function asset(string $path): string
    {
        return baseurl() . '/' . ltrim($path, '/');
    }
}
