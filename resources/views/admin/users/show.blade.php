@extends('admin.layouts.main')

@section('title',__('admin.show-users'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('users.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('users.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('users.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="if(!confirm('{{ __('admin.trash') }}')) return false;">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.users-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.users-name') }}</th>
            <td>{{ $main->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.users-email') }}</th>
            <td>{{ $main->email }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.users-password') }}</th>
            <td>
                @if( $main->password )
                    {{ $main->password }}
                @else
                    {{ __('admin.disabled') }}
                @endif</td>
        </tr>
        <tr>
            <th>{{ __('admin.users-roles') }}</th>
            <td>{{ $main->role->name }}</td>
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