@extends('layouts.main')

@section('title', 'Новини')

@section('content')
    <p class="lead">Автор: <a href="#">{{ $main->user->name }}</a></p>
    <hr>
    <p>Опубликовано: {{ $main->created_at }}</p>
    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="{{ $main->images }}" alt="{{ $main->title }}">

    <hr>
    {{ $main->content }}
    <hr>
    <p>Категорія: <a href="{{ route('categories.views',$main->category->url) }}">{{ $main->category->title }}</a></p>
    <p>Теги: <a href="{{ route('categories.views',$main->category->url) }}">{{ $main->category->title }}</a></p>
    <hr>
    <a href="{{ URL::previous() }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i>Назад</a>
    <hr>
    <!-- Post Content -->
    <!-- Comments Form -->
    @guest
        <div class="alert alert-danger text-center" role="alert">
            <p>Вибачте але ви не можете залити коментар тому що ви не зарегестровані, або не вішли на сайт</p>
        </div>
    @else
        <div class="card my-4">
            <h5 class="card-header">Залишити коментар:</h5>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Відправити</button>
                </form>
            </div>
        </div>
    @endif
    <!-- Single Comment -->
    <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
            lacinia congue felis in faucibus.
        </div>
    </div>

    <!-- Comment with nested comments -->
    <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
            lacinia congue felis in faucibus.

            <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus
                    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

            <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus
                    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

        </div>
    </div>
@endsection

