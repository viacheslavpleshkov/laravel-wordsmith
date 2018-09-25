@extends('admin.layouts.main')

@section('title',__('admin.home-title'))

@section('content')
    @include('admin.includes.title')
    <div class="jumbotron">
        <h1 class="display-4">{{ __('admin.home-hello') }}, {{ Auth::user()->name }}</h1>
        <p class="lead">{{ __('admin.home-welcome') }}</p>
        <hr class="my-4">
        <a class="btn btn-original btn-lg" href="{{ config('app.url') }}" role="button">{{ __('admin.home-url') }} <i
                    class="fas fa-arrow-right"></i></a>
    </div>
@endsection