@extends('errors.layouts.error')

@section('title','500')

@section('content')
    <h1 class="text-h1">@yield('title')</h1>
    <h3>{{ __('errors.500title') }}</h3>
    <p class="text-muted m-t-30 m-b-30">{{ __('errors.500text') }}</p>
    <a href="{{ URL::previous() }}" class="btn rounded-0 m-b-40">{{ __('errors.back') }}</a>
@endsection