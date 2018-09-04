@extends('admin.layouts.main')

@section('title',__('admin.create-knowledge-of-languages'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('knowledge-of-languages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-language-en') }}</label>
            <input type="text" class="form-control" name="languageen" value="{{ old('languageen') }}"
                   placeholder="{{ __('admin.knowledge-of-enter-languages-language-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-language-uk') }}</label>
            <input type="text" class="form-control" name="languageuk" value="{{ old('languageuk') }}"
                   placeholder="{{ __('admin.knowledge-of-enter-languages-language-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-language-ru') }}</label>
            <input type="text" class="form-control" name="languageru" value="{{ old('languageru') }}"
                   placeholder="{{ __('admin.knowledge-of-enter-languages-language-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-level-en') }}</label>
            <input type="text" class="form-control" name="levelen" value="{{ old('levelen') }}"
                   placeholder="{{ __('admin.knowledge-of-languages-enter-level-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-level-uk') }}</label>
            <input type="text" class="form-control" name="leveluk" value="{{ old('leveluk') }}"
                   placeholder="{{ __('admin.knowledge-of-languages-enter-level-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-level-ru') }}</label>
            <input type="text" class="form-control" name="levelru" value="{{ old('levelru') }}"
                   placeholder="{{ __('admin.knowledge-of-languages-enter-level-ru') }}" required>
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