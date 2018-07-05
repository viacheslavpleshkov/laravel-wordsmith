<div class="card my-4">
    <h5 class="card-header">Категорії</h5>
    <div class="card-body">
        <div class="row">
            @foreach($main as $item)
                <ul class="col-lg-6 list-unstyled mb-0">
                    <li>
                        {{--<a href="{{ $item->url }}">{{ $item->title }}</a>--}}
                    </li>

                </ul>
            @endforeach

        </div>
    </div>
</div>