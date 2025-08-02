<?php

if (!function_exists('redirect')) {
    function redirect(string $path): void
    {
        header("Location: " . baseurl() . $path);
        exit;
    }
}