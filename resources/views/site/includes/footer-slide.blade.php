<section class="s-extra">
    <div class="row">
        {{ Widget::Popularposts() }}
        <div class="col-four md-six tab-full end">
        <div class="row">
                {{ Widget::Categories() }}
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
