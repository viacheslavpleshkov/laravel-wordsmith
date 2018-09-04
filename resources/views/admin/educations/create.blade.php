@extends('admin.layouts.main')

@section('title',__('admin.create-educations'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('educations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.educations-title-en') }}</label>
            <input type="text" class="form-control" name="titleen" value="{{ old('titleen') }}"
                   placeholder="{{ __('admin.educations-enter-title-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-title-uk') }}</label>
            <input type="text" class="form-control" name="titleuk" value="{{ old('titleuk') }}"
                   placeholder="{{ __('admin.educations-enter-title-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-title-ru') }}</label>
            <input type="text" class="form-control" name="titleru" value="{{ old('titleru') }}"
                   placeholder="{{ __('admin.educations-enter-title-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-text-en') }}</label>
            <input type="text" class="form-control" name="texten" value="{{ old('texten') }}"
                   placeholder="{{ __('admin.educations-enter-text-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-text-uk') }}</label>
            <input type="text" class="form-control" name="textuk" value="{{ old('textuk') }}"
                   placeholder="{{ __('admin.educations-enter-text-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-text-ru') }}</label>
            <input type="text" class="form-control" name="textru" value="{{ old('textru') }}"
                   placeholder="{{ __('admin.educations-enter-text-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-time-en') }}</label>
            <input type="text" class="form-control" name="timeen"
                   {{ old('timeen') }} placeholder="{{ __('admin.educations-enter-time-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-time-uk') }}</label>
            <input type="text" class="form-control" name="timeuk"
                   {{ old('timeuk') }} placeholder="{{ __('admin.educations-enter-time-uk') }}" required>
        </div>
        <div class="form-group">
            <label>{{ __('admin.educations-time-ru') }}</label>
            <input type="text" class="form-control" name="timeru"
                   {{ old('timeru') }} placeholder="{{ __('admin.educations-enter-time-ru') }}" required>
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