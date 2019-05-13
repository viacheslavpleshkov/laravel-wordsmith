@extends('admin.layouts.main')

@section('title',__('admin.show-articles'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('articles.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('articles.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('articles.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="if(!confirm('{{ __('admin.trash') }}')) return false;">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.articles-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.articles-name') }}</th>
            <td>{{ $main->title }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.articles-images') }}</th>
            @if($main->images == 'none')
                <td><img src="/images/thumbs/single/standard/standard-1000.jpg" width="100px" alt=""></td>
            @else
                <td><img src="{{ config('app.url_file').$main->images }}" width="100px" alt=""></td>
            @endif
        </tr>
        <tr>
            <th>{{ __('admin.articles-url') }}</th>
            <td>{{ route('site.article.view',$main->url) }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.articles-text') }}</th>
            <td>{{ $main->text }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.articles-category') }}</th>
            <td>{{ $main->category->name.' ('.$main->category->id.')' }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.articles-seo') }}</th>
            <td>{{ $main->seo->title.' ('.$main->seo->id.')' }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.articles-views') }}</th>
            <td>{{ $main->views }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.articles-slide') }}</th>
            <td>
                @if($main->slide)
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.articles-user') }}</th>
            <td>{{ $main->user->name.' ('.$main->seo->id.')' }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.status') }}</th>
            <td>
                @if($main->status)
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.created') }}</th>
            <td>{{ $main->created_at }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.update') }}</th>
            <td>{{ $main->updated_at }}</td>
        </tr>
    </table>
@endsection