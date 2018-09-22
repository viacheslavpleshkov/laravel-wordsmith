@extends('admin.layouts.main')

@section('title',__('admin.edit-seo'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('seo.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.seo-description') }}</label>
            <input type="text" class="form-control" name="description" value="{{ $main->description }}"
                   placeholder="{{ __('admin.seo-enter-description') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.seo-keyword') }}</label>
            <input type="text" class="form-control" name="keyword" value="{{ $main->keyword }}"
                   placeholder="{{ __('admin.seo-enter-keyword') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.seo-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ $main->url }}"
                   placeholder="{{ __('admin.seo-enter-url') }}" required>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection