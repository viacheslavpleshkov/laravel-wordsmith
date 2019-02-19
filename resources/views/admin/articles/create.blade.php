@extends('admin.layouts.main')

@section('title',__('admin.create-articles'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.articles-name') }}</label>
            <input type="text" class="form-control" name="title" placeholder="{{ __('admin.articles-enter-name') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-url') }}</label>
            <input type="text" class="form-control" name="url"
                   placeholder="{{ __('admin.articles-enter-url') }}" required>
        </div>

        <label>{{ __('admin.articles-images') }}</label><br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">{{ __('admin.articles-upload') }}</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="images">
                <label class="custom-file-label"></label>
            </div>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-text') }}</label>
            <textarea name="text" class="form-control" cols="30" placeholder="{{ __('admin.articles-enter-text') }}"
                      rows="10"></textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-category') }}</label>
            <select class="form-control" name="category_id" required>
                @foreach($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name.' ('.$item->id.')' }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label>{{ __('admin.articles-seo') }}</label>
            <select class="form-control" name="seo_id" required>
                @foreach($seo as $item)
                    <option value="{{ $item->id }}">{{ $item->title.' ('.$item->id.')' }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-views') }}</label>
            <input type="text" class="form-control" name="views"
                   placeholder="{{ __('admin.articles-enter-views') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-slide') }}</label>
            <select class="form-control" name="slide" required>
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