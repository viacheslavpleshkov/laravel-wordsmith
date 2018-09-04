@extends('admin.layouts.main')

@section('title',__('admin.create-about-me'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('about-me.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.about-me-en') }}</label>
            <textarea class="form-control" name="aboutmeen" rows="10"
                      placeholder="{{ __('admin.about-me-enter-en') }}" required>{{ old('aboutmeen') }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.about-me-uk') }}</label>
            <textarea class="form-control" name="aboutmeuk" rows="10"
                      placeholder="{{ __('admin.about-me-enter-uk') }}" required>{{ old('aboutmeuk') }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.about-me-ru') }}</label>
            <textarea class="form-control" name="aboutmeru" rows="10"
                      placeholder="{{ __('admin.about-me-enter-ru') }}" required>{{ old('aboutmeru') }}</textarea>
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