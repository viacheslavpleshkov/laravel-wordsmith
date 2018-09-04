@extends('admin.layouts.main')

@section('title',__('admin.edit-experiences'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('experiences.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.experiences-title-en') }}</label>
            <input type="text" class="form-control" name="titleen" value="{{ $main->titleen }}"
                   placeholder="{{ __('admin.experiences-enter-title-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-title-uk') }}</label>
            <input type="text" class="form-control" name="titleuk" value="{{ $main->titleuk }}"
                   placeholder="{{ __('admin.experiences-enter-title-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-title-ru') }}</label>
            <input type="text" class="form-control" name="titleru" value="{{ $main->titleru }}"
                   placeholder="{{ __('admin.experiences-enter-title-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-company-en') }}</label>
            <input type="text" class="form-control" name="companyen" value="{{ $main->companyen }}"
                   placeholder="{{ __('admin.experiences-enter-company-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-company-uk') }}</label>
            <input type="text" class="form-control" name="companyuk" value="{{ $main->companyuk }}"
                   placeholder="{{ __('admin.experiences-enter-company-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-company-ru') }}</label>
            <input type="text" class="form-control" name="companyru" value="{{ $main->companyru }}"
                   placeholder="{{ __('experiences-enter-company-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-time-en') }}</label>
            <input type="text" class="form-control" name="timeen" value="{{ $main->timeen }}"
                   placeholder="{{ __('admin.experiences-enter-time-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-time-uk') }}</label>
            <input type="text" class="form-control" name="timeuk" value="{{ $main->timeuk }}"
                   placeholder="{{ __('admin.experiences-enter-time-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-time-ru') }}</label>
            <input type="text" class="form-control" name="timeru" value="{{ $main->timeru }}"
                   placeholder="{{ __('admin.experiences-enter-time-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-text-en') }}</label>
            <textarea class="form-control" name="texten" rows="8" placeholder="{{ __('admin.experiences-enter-text-en') }}"
                      required>{{ $main->texten }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.experiences-text-uk') }}</label>
            <textarea class="form-control" name="textuk" rows="8" placeholder="{{ __('admin.experiences-enter-text-uk') }}"
                      required>{{ $main->textuk }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('experiences-text-ru') }}</label>
            <textarea class="form-control" name="textru" rows="8" placeholder="{{ __('admin.experiences-enter-text-ru') }}"
                      required>{{ $main->textru }}</textarea>
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