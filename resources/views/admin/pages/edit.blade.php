@extends('admin.layouts.main')

@section('title',__('admin.edit-pages'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('pages.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.pages-name') }}</label>
            <input type="text" class="form-control" name="title" value="{{ $main->title }}"
                   placeholder="{{ __('admin.pages-enter-name') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.pages-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ $main->url }}"
                   placeholder="{{ __('admin.pages-enter-url') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.pages-content_header') }}</label>
            <textarea class="form-control" name="content_header" rows="5" placeholder="{{ __('admin.pages-enter-content_header') }}"
                      required>{{ $main->content_header }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.pages-text') }}</label>
            <textarea class="form-control" name="text" rows="5" placeholder="{{ __('admin.pages-enter-text') }}"
                      required>{{ $main->text }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.pages-seo') }}</label>
            <select class="form-control" name="seo_id" required>
                <option value="{{ $main->seo->id }}">{{ $main->seo->title.' ('.$main->seo->id.')' }}</option>
                @foreach($seo as $item)
                    @if($main->seo->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->title.' ('.$item->id.')' }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection