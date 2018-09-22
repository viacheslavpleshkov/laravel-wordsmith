<div class="col-seven md-six tab-full popular">
    <h3>{{ __('site.footer-slider-popular-posts') }}</h3>
    <div class="block-1-2 block-m-full popular__posts">
        @foreach($main as $item)
        <article class="col-block popular__post">
            <a href="{{ route('site.article.view',$item->url) }}" class="popular__thumb">
                <img src="{{ asset('images/thumbs/small/tulips-150.jpg') }}" alt="">
            </a>
            <h5>{{ $item->title }}</h5>
            <section class="popular__meta">
                <span class="popular__author"><span>{{ __('site.footer-slider-by') }}</span> <a href="{{ route('site.article.view',$item->url) }}">{{ $item->user->name }}</a></span>
                <span class="popular__date"><span>{{ __('site.footer-slider-on') }}</span> <time datetime="2018-06-14">{{ $item->created_at }}</time></span>
            </section>
        </article>
            @endforeach
    </div>
</div>