@extends('admin.layouts.main')

@section('title',__('admin.create-categories'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.categories-name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                   placeholder="{{ __('admin.categories-enter-name') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.categories-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ old('url') }}"
                   placeholder="{{ __('admin.categories-enter-url') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.categories-men') }}</label>
            <select class="form-control" name="men" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.categories-women') }}</label>
            <select class="form-control" name="women" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.categories-kids') }}</label>
            <select class="form-control" name="kids" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.categories-accessories') }}</label>
            <select class="form-control" name="accessories" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.status') }}</label>
            <select class="form-control" name="status" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.create') }}</button>
    </form>
@endsection