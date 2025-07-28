<?php

namespace App\Core;

require_once dirname(__DIR__, 2) . '/helpers/url_helper.php';

class Redirect
{
    public function to(string $location): void
    {
        header('Location: ' . \baseurl() . '/' . ltrim($location, '/'));
        exit;
    }

    public function back(): void
    {
        $referer = $_SERVER['HTTP_REFERER'] ?? \baseurl();
        header('Location: ' . $referer);
        exit;
    }
}
