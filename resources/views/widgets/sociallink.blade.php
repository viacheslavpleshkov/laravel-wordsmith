<div class="col-six">
    <ul class="footer-social">
        @foreach($sociallink as $item)
            <li>
                <a href="{{ $item->url }}"><i class="{{ $item->icon }}"></i></a>
            </li>
        @endforeach
    </ul>
</div>