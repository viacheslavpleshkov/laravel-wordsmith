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
    <link href="{{ asset ('css/error.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
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