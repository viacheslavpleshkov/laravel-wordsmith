@extends('admin.layouts.main')

@section('title',__('admin.edit-articles'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('articles.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.articles-name') }}</label>
            <input type="text" class="form-control" name="title" value="{{ $main->title }}"
                   placeholder="{{ __('admin.articles-enter-name') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ $main->url }}"
                   placeholder="{{ __('admin.articles-enter-url') }}" required>
        </div>

        <label>{{ __('admin.articles-images') }}</label><br>
        <img src="{{ asset('storage/'.$main->images) }}" width="100px" class="mb-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">{{ __('admin.articles-upload') }}</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="images" value="{{ $main->images }}">
                <label class="custom-file-label">{{ $main->images }}</label>
            </div>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-text') }}</label>
            <textarea name="text" class="form-control" cols="30" placeholder="{{ __('admin.articles-enter-text') }}" rows="10">{{ $main->text }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-category') }}</label>
            <select class="form-control" name="seo_id" required>
                <option value="{{ $main->category->id }}">{{ $main->category->name.' ('.$main->seo->id.')' }}</option>
                @foreach($categories as $item)
                    @if($main->category->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name.' ('.$item->id.')' }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-seo') }}</label>
            <select class="form-control" name="seo_id" required>
                <option value="{{ $main->seo->id }}">{{ $main->seo->title.' ('.$main->seo->id.')' }}</option>
                @foreach($seo as $item)
                    @if($main->seo->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->title.' ('.$item->id.')' }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-views') }}</label>
            <input type="text" class="form-control" name="views" value="{{ $main->views }}"
                   placeholder="{{ __('admin.articles-enter-views') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-slide') }}</label>
            <select class="form-control" name="slide" required>
                @if($main->slide)
                    <option value="1">{{ __('admin.enabled') }}</option>
                    <option value="0">{{ __('admin.disabled') }}</option>
                @else
                    <option value="0">{{ __('admin.disabled') }}</option>
                    <option value="1">{{ __('admin.enabled') }}</option>
                @endif
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.articles-user') }}</label>
            <select class="form-control" name="user_id" required>
                <option value="{{ $main->user->id }}">{{ $main->user->name.' ('.$main->user->id.')' }}</option>
                @foreach($users as $item)
                    @if($main->user->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name.' ('.$item->id.')' }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.status') }}</label>
            <select class="form-control" name="status" required>
                @if($main->status)
                    <option value="1">{{ __('admin.enabled') }}</option>
                    <option value="0">{{ __('admin.disabled') }}</option>
                @else
                    <option value="0">{{ __('admin.disabled') }}</option>
                    <option value="1">{{ __('admin.enabled') }}</option>
                @endif
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection