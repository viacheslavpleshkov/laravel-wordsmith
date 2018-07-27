@extends('admin.layouts.main')

@section('title',__('admin.show-news'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('news.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('news.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('news.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.news-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.news-title') }}</th>
            <td>{{ $main->title }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.news-description') }}</th>
            <td>{{ $main->description }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.news-content') }}</th>
            <td>{{ $main->content }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.news-images') }}</th>
            <td>{{ $main->images }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.news-url') }}</th>
            <td>{{ route('news.views',$main->url) }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.news-views') }}</th>
            <td>{{ $main->views }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.news-category') }}</th>
            <td>{{ $main->category->title }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.news-tags') }}</th>
            <td>{{ $main->tag }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.news-author') }}</th>
            <td>{{ $main->user->name }}</td>
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