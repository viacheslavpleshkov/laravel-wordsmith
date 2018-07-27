@extends('admin.layouts.main')

@section('title',__('admin.create-categories'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.categories-title') }}</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                   placeholder="{{ __('admin.categories-enter-title') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.categories-url') }}</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">{{ route('news.view, 1') }}</span>
                </div>
                <input type="text" class="form-control" name="url" value="{{ old('url') }}"
                       placeholder="{{ __('admin.categories-enter-level') }}" required>
            </div>
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