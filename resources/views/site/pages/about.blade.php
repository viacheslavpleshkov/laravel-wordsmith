@extends('site.layouts.main')

@section('title',__('site.about-title'))

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">{{ __('site.about-title') }} </h1>
                <p class="lead">{{ $main->description }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                <p>
                    <img src="{{ asset('/'.$main->images) }}">
                </p>
                {!! $main->text !!}

            </div>
        </div>

    </section>
@endsection