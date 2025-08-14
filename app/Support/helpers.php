<?php

if (!function_exists('app_brand')) {
    /**
     * Get the application brand name
     *
     * @return string
     */
    function app_brand(): string
    {
        return config('app.name', 'SkyNest');
    }
}