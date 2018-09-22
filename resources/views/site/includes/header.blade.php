<header class="s-header header">

    <div class="header__logo">
        <a class="logo" href="{{ route('site.index') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="Homepage">
        </a>
    </div>

    <a class="header__search-trigger" href="#0"></a>
    <div class="header__search">

        <form role="search" method="get" class="header__search-form" action="#">
            <label>
                <span class="hide-content">{{ __('site.nav-search-for') }}</span>
                <input type="search" class="search-field" placeholder="{{ __('site.nav-type-keywords') }}" value="" name="s"
                       title="{{ __('site.nav-search-for') }}" autocomplete="off">
            </label>
            <input type="submit" class="search-submit" value="{{ __('site.nav-search') }}">
        </form>

        <a href="#0" title="{{ __('site.nav-close') }}" class="header__overlay-close">{{ __('site.nav-close') }}</a>

    </div>

    <a class="header__toggle-menu" href="#0" title="{{ __('site.menu') }}"><span>{{ __('site.menu') }}</span></a>
    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">{{ __('site.nav-navigate-to') }}</h2>

        <ul class="header__nav">
            <li class="{{ url()->current() == route('site.index') ? 'current' : '' }}"><a
                        href="{{ route('site.index') }}" title="">{{ __('site.nav-home') }}</a></li>
            {{ Widget::Navcategories() }}
            <li class="{{ Request::is('*blog*') ? 'current' : '' }}"><a href="{{ route('site.article.index') }}"
                                                                        title="">{{ __('site.nav-blog') }}</a></li>
            <li class="{{ url()->current() == route('site.about') ? 'current' : '' }}"><a
                        href="{{ route('site.about') }}" title="">{{ __('site.nav-about') }}</a></li>
            <li class="{{ url()->current() == route('site.contact') ? 'current' : '' }}"><a
                        href="{{ route('site.contact') }}" title="">{{ __('site.nav-contact') }}</a></li>
            <li class="has-children {{ Request::is('*auth*') ? 'current' : '' }}">
                @guest
                    <a href="#0" title="">{{ __('site.nav-account') }}</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('login') }}">{{ __('site.nav-login') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('site.nav-register') }}</a></li>
                        <li><a href="{{ route('password.request') }}">{{ __('site.nav-reset-password') }}</a></li>
                    </ul>
                @else
                    <a href="#0" title="">{{ Auth::user()->name }}</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('profile.index') }}">{{ __('site.nav-personal-area') }}</a></li>
                        @if(in_array(Auth::user()->role->name, ['Author','Moderator','Admin']))
                            <li><a href="{{ route('admin.index') }}">{{ __('site.nav-admin-panel') }}</a></li>
                        @endif
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('site.nav-logout') }}</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                        @csrf
                    </ul>
                @endif
            </li>
        </ul>
        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">{{ __('site.nav-close') }}</a>
    </nav>
</header>
