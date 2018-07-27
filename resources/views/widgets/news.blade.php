@if (count($main)>0)
    <h3 class="my-3">Останні новини:</h3>
    <div class="card-group">
        @foreach($main as $item)
            <div class="card">
                <img class="card-img-top" src="{{ $item->images }}" alt="{{ $item->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <a href="{{ route('news.views',$item->url) }}" class="btn btn-original">Читати далі &rarr;</a>
                </div>
            </div>
        @endforeach
    </div>
@endif