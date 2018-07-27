<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Page @yield('title')</title>
    <link rel="author" href="{{ asset ('humans.txt')}}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset ('site.webmanifest')}}">
    <link rel="mask-icon" href="{{ asset ('safari-pinned-tab.svg')}}" color="#4a6978">
    <meta name="msapplication-TileColor" content="#4a6978">
    <meta name="theme-color" content="#4a6978">
    <link href="{{ asset ('css/error.css')}}" rel="stylesheet">
</head>
<body>
<section id="wrapper" class="container-fluid">
    <div class="error-box">
        <div class="error-body text-center">
            @yield('content')
        </div>
    </div>
</section>
<script src="{{ asset('js/error.js')}}"></script>
</body>
</html>