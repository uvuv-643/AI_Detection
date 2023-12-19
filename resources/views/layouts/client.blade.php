<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <title>AI Detection</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link rel="icon" type="image/svg+xml" sizes="any" href="{{ asset('images/favicon.svg') }}">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}"/>
    @stack('styles')
</head>
<body>

@include ('components.header')
<div class="content">
    @yield('content')
</div>

<script src="{{ asset('js/main.js') }}"></script>
@stack('scripts')
</body>
</html>
