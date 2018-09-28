@extends('admin.layouts.main')

@section('title',__('admin.edit-categories'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('categories.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.categories-name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ $main->name }}"
                   placeholder="{{ __('admin.categories-enter-name') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.categories-url') }}</label>
            <input type="text" class="form-control" name="url" value="{{ $main->url }}"
                   placeholder="{{ __('admin.categories-enter-url') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.categories-seo') }}</label>
            <select class="form-control" name="seo_id" required>
                <option value="{{ $main->seo->id }}">{{ $main->seo->title.' ('.$main->seo->id.')' }}</option>
                @foreach($seo as $item)
                    @if($main->seo->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->title.' ('.$item->id.')' }}</option>
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