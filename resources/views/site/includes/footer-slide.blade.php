<section class="s-extra">
	<div class="row">
		<div class="col-seven md-six tab-full popular">
			<h3>{{ __('site.footer-slider-popular-posts') }}</h3>
			<div class="block-1-2 block-m-full popular__posts">
				@foreach($popularposts as $item)
					<article class="col-block popular__post">
						<a href="{{ route('site.article.view',$item->url) }}" class="popular__thumb">
							<img src="{{ asset('images/thumbs/single/standard/standard-1000.jpg') }}" alt="">
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
		<div class="col-four md-six tab-full end">
			<div class="row">
				<div class="col-six md-six mob-full categories">
					<h3>{{ __('site.footer-slider-categories') }}</h3>
					<ul class="linklist">
						@foreach($categories as $item)
							<li><a href="{{ route('site.categories', $item->url) }}">{{ $item->name }}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-six md-six mob-full sitelinks">
					<h3>{{ __('site.footer-slider-site-links') }}</h3>
					<ul class="linklist">
						<li><a href="{{ route('site.index') }}">{{ __('site.footer-slider-home') }}</a></li>
						<li><a href="{{ route('site.article.index') }}">{{ __('site.footer-slider-blog') }}</a></li>
						<li><a href="{{ route('site.about') }}">{{ __('site.footer-slider-about') }}</a></li>
						<li><a href="{{ route('site.contact') }}">{{ __('site.footer-slider-contact') }}</a></li>
						<li><a href="{{ route('site.privacy-policy') }}">{{ __('site.footer-slider-privacy-policy') }}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
