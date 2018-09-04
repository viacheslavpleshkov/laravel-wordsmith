@extends('admin.layouts.main')

@section('title',__('admin.create-experiences'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('experiences.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.experiences-title-en') }}</label>
            <input type="text" class="form-control" name="titleen" value="{{ old('titleen') }}"
                   placeholder="{{ __('admin.experiences-enter-title-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-title-uk') }}</label>
            <input type="text" class="form-control" name="titleuk" value="{{ old('titleuk') }}"
                   placeholder="{{ __('admin.experiences-enter-title-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-title-ru') }}</label>
            <input type="text" class="form-control" name="titleru" value="{{ old('titleru') }}"
                   placeholder="{{ __('admin.experiences-enter-title-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-company-en') }}</label>
            <input type="text" class="form-control" name="companyen" value="{{ old('companyen') }}"
                   placeholder="{{ __('admin.experiences-enter-company-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-company-uk') }}</label>
            <input type="text" class="form-control" name="companyuk" value="{{ old('companyuk') }}"
                   placeholder="{{ __('admin.experiences-enter-company-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-company-ru') }}</label>
            <input type="text" class="form-control" name="companyru" value="{{ old('companyru') }}"
                   placeholder="{{ __('admin.experiences-enter-company-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-time-en') }}</label>
            <input type="text" class="form-control" name="timeen" value="{{ old('timeen') }}"
                   placeholder="{{ __('admin.experiences-enter-time-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-time-uk') }}</label>
            <input type="text" class="form-control" name="timeuk" value="{{ old('timeuk') }}"
                   placeholder="{{ __('admin.experiences-enter-time-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-time-ru') }}</label>
            <input type="text" class="form-control" name="timeru" value="{{ old('timeru') }}"
                   placeholder="{{ __('admin.experiences-enter-time-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-text-en') }}</label>
            <textarea class="form-control" name="texten" rows="8" placeholder="{{ __('admin.experiences-enter-text-en') }}"
                      required>{{ old('texten') }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-text-uk') }}</label>
            <textarea class="form-control" name="textuk" rows="8" placeholder="{{ __('admin.experiences-enter-text-uk') }}"
                      required>{{ old('textuk') }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-text-ru') }}</label>
            <textarea class="form-control" name="textru" rows="8" placeholder="{{ __('admin.experiences-enter-text-ru') }}"
                      required>{{ old('textru') }}</textarea>
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