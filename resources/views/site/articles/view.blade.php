@extends('site.layouts.main')

@section('title',$main->title)

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">
        <article class="row entry format-standard">
            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    @if($main->images == 'none')
                        <img src="{{ asset('images/thumbs/single/standard/standard-1000.jpg') }}" sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                    @else
                        <img src="{{ config('app.url_file').$main->images}}" sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                    @endif
                </div>
            </div>
            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">{{ $main->title }}</h1>
                <ul class="entry__header-meta">
                    <li class="date">{{ $main->created_at }}</li>
                    <li class="byline">{{ __('site.blog-view-by').' '.$main->user->name }}</li>
                    <li class="byline">{{ __('site.blog-view-category').' '.$main->category->name }}</li>
                </ul>
            </div>
            <div class="col-full entry__main">
                {!! $main->text !!}
                <div class="entry__author">
                    <img src="{{ Gravatar::src($main->user->email) }}" alt="">
                    <div class="entry__author-about">
                        <h5 class="entry__author-name">
                            <span>{{ __('site.blog-view-posted by') }}</span>
                            <a href="#0">{{ $main->user->name  }}</a>
                        </h5>
                        <div class="entry__author-desc">
                            <p>{{ $main->user->about }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <div class="s-content__entry-nav">
            <div class="row s-content__nav">
                @if(isset($previous))
                    <div class="col-six s-content__prev">
                        <a href="{{ route('site.article.view',$previous->url) }}" rel="prev">
                            <span>{{ __('site.blog-view-previous-post') }}</span>
                            {{ $previous->title }}
                        </a>
                    </div>
                @endif
                @if(isset($next))
                    <div class="col-six s-content__next">
                        <a href="{{ route('site.article.view',$next->url) }}" rel="next">
                            <span>{{ __('site.blog-view-next-post') }}</span>
                            {{ $next->title }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
        @guest
            <comments-list-component :article-id='@json($main->id)'></comments-list-component>
        @else
            <comments-component :article-id='@json($main->id)' :user-name='@json(auth()->user()->name)'></comments-component>
        @endif
    </section>
@endsection



