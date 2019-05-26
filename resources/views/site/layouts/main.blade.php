<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@if(url()->current() != route('site.index')) @yield('title') |  @endif{{ $main->seo->titile ?? __('site.name')}}</title>
	<meta name="description" content="{{ $main->seo->description ?? 'Wordsmith description' }}"/>
	<meta name="keywords" content="{{ $main->seo->keywords ?? 'Wordsmith, Music'}}"/>
	<link rel="author" href="{{ asset('humans.txt') }}"/>
	<link rel="stylesheet" href="{{ asset('css/site.css') }}">
	<script src="{{ asset('js/modernizr.js') }}"></script>
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body id="top">
<div id="preloader">
	<div id="loader" class="dots-fade">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>
<div id="app">
	@include('site.includes.header')
	@yield('content')
	@include('site.includes.footer-slide')
	@include('site.includes.footer')
</div>
@yield('requiredJS')
{!!  GoogleReCaptchaV3::init() !!}
<script src="{{ asset('js/site.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>