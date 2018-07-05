@extends('layouts.main')

@section('title', 'Новини')

@section('content')
    <div class="col-md-8">
        {{--@foreach($main as $item)--}}
            {{--<div class="card mb-4">--}}
                {{--<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">--}}
                {{--<div class="card-body">--}}
                    {{--<h2 class="card-title">{{ $item->title }}</h2>--}}
                    {{--<p class="card-text">{{ $item->description }}</p>--}}
                    {{--<a href="{{ route('',$item->url) }}" class="btn btn-primary">Читати далі &rarr;</a>--}}
                {{--</div>--}}
                {{--<div class="card-footer text-muted">--}}
                    {{--Автор: <a href="#">{{ $item->user_id }}</a>--}}
                    {{--Категорія: <a href="#">{{ $item->category_id }}</a>,--}}
                    {{--Опубліковано: {{ $item->date }},--}}
                    {{--Перегляди: {{ $item->views }}.--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
        {{--{{ $main->links() }}--}}
    </div>
@endsection
