<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="mx-auto flex min-h-screen max-w-7xl flex-col overflow-x-hidden bg-gray-100 sm:px-6 lg:px-8">
        {{-- Alert --}}
        @if (session('success'))
            <x-Alert type="success" :alert="session('success')">
            </x-Alert>
        @endif
        @if (session('danger'))
            <x-Alert :alert="session('danger')">
            </x-Alert>
        @endif
        @if (session('info'))
            <x-Alert type="info" :alert="session('info')">
            </x-Alert>
            @endif @if (session('warning'))
                <x-Alert type="warning" :alert="session('warning')">
                </x-Alert>
            @endif
            @yield('content')

            <x-Footer></x-Footer>
