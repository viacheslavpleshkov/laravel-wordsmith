@extends('admin.layouts.main')

@section('title',__('admin.show-seo'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('seo.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('seo.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('seo.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.seo-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.seo-description') }}</th>
            <td>{{ $main->description }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.seo-keyword') }}</th>
            <td>{{ $main->keyword }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.seo-url') }}</th>
            <td>{{ $main->url }}</td>
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