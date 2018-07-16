<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Пік Анаконди</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
@include('admin.includes.navigation')
<div class="content-wrapper">
    <div class="container-fluid">
    <!-- Content-->
        @yield('content')
    </div>
    <!-- Footer-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Пік Анаконди ©2016-{{ date('Y') }}. Всі права захищені.</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
