<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Пік Анаконди</title>
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
@include('site.includes.nav')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @include('site.includes.titile')
            @yield('content')
        </div>
        <div class="col-md-4">
            {{ Widget::Search() }}
            {{ Widget::Flag() }}
            {{ Widget::Categories() }}
            {{ Widget::Infoadministrator() }}
            {{ Widget::Withsupport() }}
        </div>
    </div>
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <div class="text-center text-white">Пік Анаконди ©2016-{{ date('Y') }}. Всі права захищені.</div>
    </div>
</footer>
<script src="{{ asset('js/site.js') }}"></script>
</body>
</html>

