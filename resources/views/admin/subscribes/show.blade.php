@extends('admin.layouts.main')

@section('title',__('admin.show-subscribes'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('subscribes.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('subscribes.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('subscribes.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.subscribes-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>

        <tr>
            <th>{{ __('admin.subscribes-email') }}</th>
            <td>{{ $main->email }}</td>
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