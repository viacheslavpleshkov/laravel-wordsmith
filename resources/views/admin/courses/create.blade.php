@extends('admin.layouts.main')

@section('title',__('admin.create-courses'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.courses-title-en') }}</label>
            <input type="text" class="form-control" name="titleen" value="{{ old('titleen') }}"
                   placeholder="{{ __('admin.courses-enter-title-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-title-uk') }}</label>
            <input type="text" class="form-control" name="titleuk" value="{{ old('titleuk') }}"
                   placeholder="{{ __('admin.courses-enter-title-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-title-ru') }}</label>
            <input type="text" class="form-control" name="titleru" value="{{ old('titleru') }}"
                   placeholder="{{ __('admin.courses-enter-title-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-text-en') }}</label>
            <input type="text" class="form-control" name="texten" value="{{ old('texten') }}"
                   placeholder="{{ __('admin.courses-enter-text-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-text-uk') }}</label>
            <input type="text" class="form-control" name="textuk" value="{{ old('textuk') }}"
                   placeholder="{{ __('admin.courses-enter-text-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-text-ru') }}</label>
            <input type="text" class="form-control" name="textru" value="{{ old('textru') }}"
                   placeholder="{{ __('admin.courses-enter-text-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-time-en') }}</label>
            <input type="text" class="form-control" name="timeen"
                   {{ old('timeen') }} placeholder="{{ __('admin.courses-enter-time-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-time-uk') }}</label>
            <input type="text" class="form-control" name="timeuk"
                   {{ old('timeuk') }} placeholder="{{ __('admin.courses-enter-time-uk') }}" required>
        </div>
        <div class="form-group">
            <label>{{ __('admin.courses-time-ru') }}</label>
            <input type="text" class="form-control" name="timeru"
                   {{ old('timeru') }} placeholder="{{ __('admin.courses-enter-time-ru') }}" required>
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