<section class="s-extra">
    <div class="row">
        <div class="col-seven md-six tab-full popular">
            <h3>{{ __('site.footer-slider-popular-posts') }}</h3>
            <div class="block-1-2 block-m-full popular__posts">
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{ asset('images/thumbs/small/tulips-150.jpg') }}" alt="">
                    </a>
                    <h5>10 Interesting Facts About Caffeine.</h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-14">Jun 14, 2018</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{ asset('images/thumbs/small/tulips-150.jpg') }}" alt="">
                    </a>
                    <h5>10 Interesting Facts About Caffeine.</h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-14">Jun 14, 2018</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{ asset('images/thumbs/small/tulips-150.jpg') }}" alt="">
                    </a>
                    <h5>10 Interesting Facts About Caffeine.</h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-14">Jun 14, 2018</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{ asset('images/thumbs/small/tulips-150.jpg') }}" alt="">
                    </a>
                    <h5>10 Interesting Facts About Caffeine.</h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-14">Jun 14, 2018</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{ asset('images/thumbs/small/tulips-150.jpg') }}" alt="">
                    </a>
                    <h5>10 Interesting Facts About Caffeine.</h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-14">Jun 14, 2018</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{ asset('images/thumbs/small/tulips-150.jpg') }}" alt="">
                    </a>
                    <h5>10 Interesting Facts About Caffeine.</h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-14">Jun 14, 2018</time></span>
                    </section>
                </article>

            </div>
        </div>
        {{ Widget::Popularposts() }}
            <div class="row">
                {{ Widget::Categories() }}
                <div class="col-six md-six mob-full sitelinks">
                    <h3>{{ __('site.footer-slider-site-links') }}</h3>
                    <ul class="linklist">
                        <li><a href="{{ route('site.index') }}">{{ __('site.footer-slider-home') }}</a></li>
                        <li><a href="{{ route('site.blog') }}">{{ __('site.footer-slider-blog') }}</a></li>
                        <li><a href="{{ route('site.about') }}">{{ __('site.footer-slider-about') }}</a></li>
                        <li><a href="{{ route('site.contact') }}">{{ __('site.footer-slider-contact') }}</a></li>
                        <li><a href="{{ route('site.privacy-policy') }}">{{ __('site.footer-slider-privacy-policy') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
