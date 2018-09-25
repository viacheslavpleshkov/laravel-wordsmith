@extends('admin.layouts.main')

@section('title',__('admin.edit-comments'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('comments.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>{{ __('admin.comments-user') }}</label>
            <select class="form-control" name="user_id" required>
                <option value="{{ $main->user->id }}">{{ $main->user->name }}</option>
                @foreach($user as $item)
                    @if($main->user->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.comments-user') }}</label>
            <select class="form-control" name="article_id" required>
                <option value="{{ $main->article->id }}">{{ $main->article->title }}</option>
                @foreach($articles as $item)
                    @if($main->article->id === $item->id) @continue; @endif
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>{{ __('admin.comments-text') }}</label>
            <textarea class="form-control" name="text" rows="5" required>{{ $main->text }}</textarea>
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