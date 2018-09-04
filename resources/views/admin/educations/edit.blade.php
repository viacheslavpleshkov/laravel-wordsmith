@extends('admin.layouts.main')

@section('title',__('admin.edit-educations'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('educations.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.educations-title-en') }}</label>
            <input type="text" class="form-control" name="titleen" value="{{ $main->titleen }}"
                   placeholder="{{ __('admin.educations-enter-title-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-title-uk') }}</label>
            <input type="text" class="form-control" name="titleuk" value="{{ $main->titleuk }}"
                   placeholder="{{ __('admin.educations-enter-title-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-title-ru') }}</label>
            <input type="text" class="form-control" name="titleru" value="{{ $main->titleru }}"
                   placeholder="{{ __('admin.educations-enter-title-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-text-en') }}</label>
            <input type="text" class="form-control" name="texten" value="{{ $main->texten }}"
                   placeholder="{{ __('admin.educations-enter-text-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('educations-text-uk') }}</label>
            <input type="text" class="form-control" name="textuk" value="{{ $main->textuk }}"
                   placeholder="{{ __('admin.educations-enter-text-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('educations-text-ru') }}</label>
            <input type="text" class="form-control" name="textru" value="{{ $main->textru }}"
                   placeholder="{{ __('educations-enter-text-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-time-en') }}</label>
            <input type="text" class="form-control" name="timeen" value="{{ $main->timeen }}"
                   placeholder="{{ __('admin.educations-enter-time-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-time-uk') }}</label>
            <input type="text" class="form-control" name="timeuk" value="{{ $main->timeuk }}"
                   placeholder="{{ __('admin.educations-enter-time-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.educations-time-ru') }}</label>
            <input type="text" class="form-control" name="timeru" value="{{ $main->timeru }}"
                   placeholder="{{ __('admin.educations-enter-time-ru') }}" required>
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