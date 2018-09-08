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
                <span class="hide-content">Search for:</span>
                <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
            </label>
            <input type="submit" class="search-submit" value="Search">
        </form>

        <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

    </div>

    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Navigate to</h2>

        <ul class="header__nav">
            <li class="{{ url()->current() == route('site.index') ? 'current' : '' }}"><a href="{{ route('site.index') }}" title="">Home</a></li>
            <li class="has-children {{ Request::is('*categories*') ? 'current' : '' }}">
                <a href="#0" title="">Categories</a>
                <ul class="sub-menu">
                    <li><a href="category.html">Lifestyle</a></li>
                    <li><a href="category.html">Health</a></li>
                    <li><a href="category.html">Family</a></li>
                    <li><a href="category.html">Management</a></li>
                    <li><a href="category.html">Travel</a></li>
                    <li><a href="category.html">Work</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('*blog*') ? 'current' : '' }}"><a href="{{ route('site.blog') }}" title="">Blog</a></li>
            <li class="{{ url()->current() == route('site.about') ? 'current' : '' }}"><a href="{{ route('site.about') }}" title="">About</a></li>
            <li class="{{ url()->current() == route('site.contact') ? 'current' : '' }}"><a href="{{ route('site.contact') }}" title="">Contact</a></li>
            <li class="has-children {{ Request::is('*auth*') ? 'current' : '' }}" >
                <a href="#0" title="">Account</a>
                <ul class="sub-menu">
                    <li class="{{ url()->current() == route('site.contact') ? 'current' : '' }}"><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('password.request') }}">Reset Password</a></li>
                </ul>
            </li
        </ul>
        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
    </nav>
</header>
