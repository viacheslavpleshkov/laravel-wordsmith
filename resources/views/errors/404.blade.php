@extends('layouts.errors')

@section('title', 'Сторінку не знайдено (#404)')

@section('content')
    <div class="text-center">
        <h1 class="text-h1">404</h1>
        <p>Запитаний URL-адресу не знайдено на цьому сервері.</p>
        <a href="{{ route('site.index') }}" class="btn btn-primary btn-lg">Відвези мене додому</a>
        <a href="{{ route('site.write-to-us') }}" class="btn btn-default btn-lg">Написати нам</a>
    </div>
@endsection
