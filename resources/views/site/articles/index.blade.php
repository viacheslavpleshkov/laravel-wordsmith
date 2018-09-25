@extends('site.layouts.main')

@section('title', $main->seo->title)

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">{{ $main->title }}</h1>
                <p class="lead">{{ $main->content_header }}</p>
            </div>
        </div>

        <div class="row entries-wrap wide">
            <div class="entries">
                @foreach($articles as $item)
                    <article class="col-block">

                        <div class="item-entry" data-aos="zoom-in">
                            <div class="item-entry__thumb">
                                <a href="{{ route('site.article.view',$item->url) }}" class="item-entry__thumb-link">
                                    <img src="{{ asset('images/thumbs/post/lamp-400.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="item-entry__text">
                                <div class="item-entry__cat">
                                    <a href="{{ route('site.categories',$item->category->url) }}">{{ $item->category->name }}</a>
                                </div>

                                <h1 class="item-entry__title"><a href="{{ route('site.article.view',$item->url) }}">{{ $item->title }}</a></h1>

                                <div class="item-entry__date">
                                    <a href="{{ route('site.article.view',$item->url) }}">{{ $item->created_at }}</a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        {{ $articles->links('vendor.pagination.default') }}

    </section>
@endsection
