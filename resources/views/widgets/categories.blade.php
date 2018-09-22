<div class="col-six md-six mob-full categories">
    <h3>{{ __('site.footer-slider-categories') }}</h3>

    <ul class="linklist">
        @foreach($main as $item)
            <li><a href="{{ route('site.categories', $item->url) }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
</div>
