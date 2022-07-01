<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ url('/img/favicon.png') }}" />
    <title>{{ app_title($title ?? 'Administration') }}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ url('/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ url('/css/styles.css?v=1.0.3') }}" rel="stylesheet" />
    <link href="{{ url('/css/app.css') }}" rel="stylesheet" />
</head>
