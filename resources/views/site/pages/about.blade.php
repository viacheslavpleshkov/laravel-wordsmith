@extends('site.layouts.main')

@section('title', $main->seo->title)

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">{{ $main->title }} </h1>
                <p class="lead">{{ $main->content_header }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                {!! $main->text !!}

            </div>
        </div>

    </section>
@endsection