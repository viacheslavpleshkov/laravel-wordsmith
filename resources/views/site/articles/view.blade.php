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
                    <img src="{{ asset('images/avatars/user.jpg') }}" alt="">
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
        <comments-component
                :post-id='@json($main->id)'
                :user-name='@json(auth()->user()->name)'>
        </comments-component>
        {{--		@if(count($comments)>0)--}}
        {{--			<div class="comments-wrap">--}}
        {{--				<div id="comments" class="row">--}}
        {{--					<div class="col-full">--}}
        {{--						<h3 class="h2">{{ $count.' '.__('site.comment-title') }}</h3>--}}
        {{--						<ol class="commentlist">--}}
        {{--							@foreach($comments as $item)--}}
        {{--								<li class="depth-1 comment">--}}
        {{--									<div class="comment__avatar">--}}
        {{--										<img class="avatar" src="{{ asset('images/avatars/user.jpg') }}" alt=""--}}
        {{--											 width="50" height="50">--}}
        {{--									</div>--}}
        {{--									<div class="comment__content">--}}
        {{--										<div class="comment__info">--}}
        {{--											<div class="comment__author">{{ $item->user->name }}</div>--}}
        {{--											<div class="comment__meta">--}}
        {{--												<div class="comment__time">{{ $item->created_at }}</div>--}}
        {{--											</div>--}}
        {{--										</div>--}}
        {{--										<div class="comment__text"><p>{{ $item->text }}</p>--}}
        {{--										</div>--}}
        {{--									</div>--}}
        {{--								</li>--}}
        {{--							@endforeach--}}
        {{--						</ol>--}}
        {{--					</div>--}}
        {{--				</div>--}}
        {{--				<div class="row comment-respond">--}}
        {{--					@guest--}}
        {{--						<div class="alert-box alert-box--error hideit">--}}
        {{--							<p>{{ __('site.comment-alert-guest') }}</p>--}}
        {{--						</div>--}}
        {{--					@else--}}
        {{--						<div id="respond" class="col-full">--}}
        {{--							<h3 class="h2">{{ __('site.comment-add-comment') }}--}}
        {{--								<span>{{ __('site.comment-add-comment-description') }}</span></h3>--}}
        {{--							@if (session('success-comment'))--}}
        {{--								<div class="alert-box alert-box--success hideit">--}}
        {{--									<p>{{ session('success-comment') }}</p>--}}
        {{--								</div>--}}
        {{--								<br>--}}
        {{--							@endif--}}
        {{--							<form id="contactForm" action="{{ route('site.comments',$main->id) }}" method="post">--}}
        {{--								@csrf--}}
        {{--								<fieldset>--}}
        {{--									<div class="message form-field">--}}
        {{--                                <textarea name="text" id="cMessage" class="full-width"--}}
        {{--										  placeholder="{{ __('site.comment-your-message') }}"></textarea>--}}
        {{--									</div>--}}
        {{--									<input id="submit" class="btn btn--primary btn-wide btn--large full-width"--}}
        {{--										   value="{{ __('site.comment-add-comment') }}" type="submit">--}}
        {{--								</fieldset>--}}
        {{--							</form>--}}
        {{--						</div>--}}
        {{--					@endif--}}
        {{--				</div>--}}
        {{--			</div>--}}
        {{--		@else--}}
        {{--		@endif--}}
    </section>
@endsection



