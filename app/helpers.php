<?php
if (!function_exists('app_title')) {
    function app_title(?string $title = null): string
    {
        return !empty($title) ?  $title . " | " . config('app.name') : config('app.name');
    }
}
if (!function_exists('currentLink')) {
    function currentLink(string $routeName): bool
    {
        return request()->routeIs($routeName);
    }
}
if (!function_exists("classOnCurrentLink")) {
    function classOnCurrentLink(string $routeName, ?string $startingClass = 'underline', ?string $endingClass = '')
    {
        return currentLink($routeName) ? $startingClass : $endingClass;
    }
}
