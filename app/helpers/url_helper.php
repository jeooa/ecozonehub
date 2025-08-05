<?php
function baseurl(string $path = ''): string
{
    $host = $_SERVER['HTTP_HOST'];
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

    $url = $protocol . '://' . $host . $basePath;

    return $path ? $url . '/' . ltrim($path, '/') : $url;
}
