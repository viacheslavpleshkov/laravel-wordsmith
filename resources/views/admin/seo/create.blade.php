@extends('admin.layouts.main')

@section('title',__('admin.create-seo'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('seo.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.seo-description') }}</label>
            <input type="text" class="form-control" name="description" value="{{ old('description') }}"
                   placeholder="{{ __('admin.seo-enter-description') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.seo-keyword') }}</label>
            <input type="text" class="form-control" name="keyword" value="{{ old('keyword') }}"
                   placeholder="{{ __('admin.seo-enter-keyword') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.seo-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ old('url') }}"
                   placeholder="{{ __('admin.seo-enter-url') }}" required>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.create') }}</button>
    </form>
@endsection