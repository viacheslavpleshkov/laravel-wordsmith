@extends('admin.layouts.main')

@section('title',__('admin.settings-title'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    @include('admin.includes.success')
    <form action="{{ route('admin.settings') }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.settings-seo_description') }}</label>
            <input type="text" class="form-control" name="seo_description" value="{{ $main->seo_description }}"
                   placeholder="{{ __('admin.settings-enter-seo_description') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-seo_keyword') }}</label>
            <input type="text" class="form-control" name="seo_keyword" value="{{ $main->seo_keyword }}"
                   placeholder="{{ __('admin.settings-enter-seo_keyword') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-about') }}</label>
            <textarea class="form-control" name="about" rows="4" placeholder="{{ __('admin.settings-enter-about') }}"
                      required>{{ $main->about }}</textarea>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection