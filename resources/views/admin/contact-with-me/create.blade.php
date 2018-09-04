@extends('admin.layouts.main')

@section('title',__('admin.create-contact-with-me'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('contact-with-me.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.contact-with-me-titles') }}</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                   placeholder="{{ __('admin.contact-with-me-enter-title') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.contact-with-me-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ old('url') }}"
                   placeholder="{{ __('admin.contact-with-me-enter-url') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.contact-with-me-icon') }}</label>
            <input type="text" class="form-control" name="icon"
                   {{ old('icon') }} placeholder="{{ __('admin.contact-with-me-enter-icon') }}"
                   required>
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