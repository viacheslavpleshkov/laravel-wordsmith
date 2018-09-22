@extends('site.layouts.main')

@section('title',__('site.name'))

@section('content')
    @include(('site.includes.featured'))
    <section class="s-content">

        <div class="row entries-wrap wide">
            <div class="entries">
                @foreach($articles as $item)
                    <article class="col-block">

                        <div class="item-entry" data-aos="zoom-in">
                            <div class="item-entry__thumb">
                                <a href="{{ route('site.article.view',$item->url) }}" class="item-entry__thumb-link">
                                    <img src="{{ asset('images/thumbs/post/lamp-400.jpg') }}" alt="{{ $item->title }}">
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

        <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn" data-aos="fade-up">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section>
@endsection

