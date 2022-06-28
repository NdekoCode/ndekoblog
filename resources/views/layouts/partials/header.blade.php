<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased" style="background: #edf2f7;">
    <div class="overflow-x-hidden bg-gray-100">
        @include('layouts.partials.navbar')
