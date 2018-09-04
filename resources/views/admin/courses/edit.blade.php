@extends('admin.layouts.main')

@section('title',__('admin.edit-courses'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('courses.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.courses-title-en') }}</label>
            <input type="text" class="form-control" name="titleen" value="{{ $main->titleen }}"
                   placeholder="{{ __('admin.courses-enter-title-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-title-uk') }}</label>
            <input type="text" class="form-control" name="titleuk" value="{{ $main->titleuk }}"
                   placeholder="{{ __('admin.courses-enter-title-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-title-ru') }}</label>
            <input type="text" class="form-control" name="titleru" value="{{ $main->titleru }}"
                   placeholder="{{ __('admin.courses-enter-title-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-text-en') }}</label>
            <input type="text" class="form-control" name="texten" value="{{ $main->texten }}"
                   placeholder="{{ __('admin.courses-enter-text-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('courses-text-uk') }}</label>
            <input type="text" class="form-control" name="textuk" value="{{ $main->textuk }}"
                   placeholder="{{ __('admin.courses-enter-text-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('courses-text-ru') }}</label>
            <input type="text" class="form-control" name="textru" value="{{ $main->textru }}"
                   placeholder="{{ __('courses-enter-text-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-time-en') }}</label>
            <input type="text" class="form-control" name="timeen" value="{{ $main->timeen }}"
                   placeholder="{{ __('admin.courses-enter-time-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-time-uk') }}</label>
            <input type="text" class="form-control" name="timeuk" value="{{ $main->timeuk }}"
                   placeholder="{{ __('admin.courses-enter-time-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.courses-time-ru') }}</label>
            <input type="text" class="form-control" name="timeru" value="{{ $main->timeru }}"
                   placeholder="{{ __('admin.courses-enter-time-ru') }}" required>
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