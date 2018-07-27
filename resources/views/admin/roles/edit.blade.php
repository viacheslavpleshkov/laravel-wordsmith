@extends('admin.layouts.main')

@section('title',__('admin.edit-roles'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('roles.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')

        <fieldset disabled>
            <div class="form-group">
                <label for="disabledTextInput">{{ __('admin.roles-name') }}</label>
                <input type="text" id="disabledTextInput" class="form-control" name="name" value="{{ $main->name }}"
                       placeholder="{{ __('admin.roles-enter-name') }}">
            </div>
        </fieldset>

        <div class="form-group">
            <label>{{ __('admin.roles-description') }}</label>
            <input type="text" class="form-control" name="description" value="{{ $main->description }}"
                   placeholder="{{ __('admin.roles-enter-description') }}" required>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection