@extends('admin.layouts.main')

@section('title',__('admin.privacy-policy-title'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    @include('admin.includes.success')
    <form action="{{ route('privacy-policy.update',$main->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.privacy-policy-content-header') }}</label>
            <textarea class="form-control" name="content_header" rows="5" placeholder="{{ __('admin.privacy-policy-enter-content-header') }}" required>{{ $main->content_header }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.privacy-policy-content') }}</label>
            <textarea class="form-control" name="text" rows="15" placeholder="{{ __('admin.privacy-policy-enter-content') }}" required>{{ $main->text }}</textarea>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection