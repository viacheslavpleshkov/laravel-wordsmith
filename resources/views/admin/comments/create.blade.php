@extends('admin.layouts.main')

@section('title',__('admin.create-comments'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('comments.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label>{{ __('admin.comments-user') }}</label>
            <select class="form-control" name="user_id" required>
                @foreach($users as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.comments-article') }}</label>
            <select class="form-control" name="article_id" required>
                @foreach($articles as $item)
                    <option value="{{ $item->id }}">{{ $item->title.' ('.$item->id.')' }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.comments-text') }}</label>
            <textarea class="form-control" name="text" rows="5" placeholder="{{ __('admin.comments-enter-text') }}"
                      required></textarea>
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