@extends('admin.layouts.main')

@section('title',__('admin.create-users'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.users-name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                   placeholder="{{ __('admin.users-enter-name') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.users-name') }}</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                   placeholder="{{ __('admin.users-enter-email') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.users-password') }}</label>
            <input type="password" class="form-control" name="password"
                   {{ old('password') }} placeholder="{{ __('admin.users-enter-password') }}"
                   required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.users-roles') }}</label>
            <select class="form-control" name="role_id" required>
                @foreach($role as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.create') }}</button>
    </form>
@endsection