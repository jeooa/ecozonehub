<?php

if (!function_exists('baseurl')) {
    function baseurl(): string
    {
        return BASE_URL;
    }
}