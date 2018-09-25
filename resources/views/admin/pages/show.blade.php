@extends('admin.layouts.main')

@section('title',__('admin.show-pages'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('pages.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('pages.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.pages-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.pages-name') }}</th>
            <td>{{ $main->title }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.pages-url') }}</th>
            <td>{{ url('/').$main->url }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.pages-content_header') }}</th>
            <td>
                @if($main->content_header)
                    {{ $main->content_header }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.pages-text') }}</th>
            <td>
                @if($main->text)
                    {{ $main->text }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.pages-seo') }}</th>
            <td>
                @if($main->seo->id)
                    {{ $main->seo->id }}
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