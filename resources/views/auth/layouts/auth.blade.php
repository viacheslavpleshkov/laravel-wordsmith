<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width       , initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@if(url()->current() != route('site.index')) @yield('title') |  @endif{{__('site.name')}}</title>
    <link rel="author" href="{{ asset('humans.txt') }}"/>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    {!! NoCaptcha::renderJs('en') !!}
</head>
<body id="top">
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
@include('site.includes.header')
@yield('content')
@include('site.includes.footer-slide')
@include('site.includes.footer')
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>