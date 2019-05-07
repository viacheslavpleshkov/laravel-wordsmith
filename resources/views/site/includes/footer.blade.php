<footer class="s-footer">
	<div class="s-footer__main">
		<div class="row">
			<div class="col-six tab-full s-footer__about">
				<h4>{{ __('site.footer-about-wordsmith') }}</h4>
				<p>{{ $settings->footer_about }}</p>
			</div>
			<div class="col-six tab-full s-footer__subscribe">
				<h4>{{ __('site.footer-our-newsletter') }}</h4>
				<p>{{ __('site.footer-our-newsletter-text') }}</p>
				@if (session('success-submit'))
					<div class="alert-box alert-box--success hideit">
						<p>{{ session('success-submit') }}</p>
					</div>
					<br>
				@else
					<div class="subscribe-form">
						<form id="mc-form" class="group" action="{{ route('site.subscribe') }}" method="post">
							@csrf
							<input type="email" name="email" class="email" id="mc-email" placeholder="{{ __('site.footer-email-address') }}" required="">
							<input type="submit" value="{{ __('site.footer-send') }}">
							<label for="mc-email" class="subscribe-message"></label>
						</form>
					</div>
				@endif
			</div>
		</div>
	</div>
	<div class="s-footer__bottom">
		<div class="row">
			<div class="col-six">
				<ul class="footer-social">
					@foreach($sociallinks as $item)
						<li><a href="{{ $item->url }}"><i class="{{ $item->icon }}"></i></a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-six">
				<div class="s-footer__copyright">
					<span>Wordsmith ©{{ date('Y') }}. All rights reserved.</span>
					<span>Made with <i class="fa fa-heart heart"></i> by  <a href="https://slavapleshkov.com/" rel="nofollow" target="_blank">Slava Pleshkova</a>.</span>
				</div>
			</div>
		</div>
	</div>
	<div class="go-top">
		<a class="smoothscroll" title="{{ __('site.footer-back-to-top') }}" href="#top"></a>
	</div>
</footer>
