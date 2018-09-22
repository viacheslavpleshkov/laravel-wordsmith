<li class="has-children {{ Request::is('*categories*') ? 'current' : '' }}">
    <a href="#0" title="">{{ __('site.nav-categories') }}</a>
    <ul class="sub-menu">
        @foreach($main as $item)
            <li><a href="{{ route('site.categories',$item->url) }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
</li>