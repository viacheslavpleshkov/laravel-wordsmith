@extends('admin.layouts.main')

@section('title',__('admin.edit-knowledge-of-languages'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('knowledge-of-languages.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-language-en') }}</label>
            <input type="text" class="form-control" name="languageen" value="{{ $main->languageen }}"
                   placeholder="{{ __('admin.knowledge-of-enter-languages-language-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-language-uk') }}</label>
            <input type="text" class="form-control" name="languageuk" value="{{ $main->languageuk }}"
                   placeholder="{{ __('admin.knowledge-of-enter-languages-language-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-language-ru') }}</label>
            <input type="text" class="form-control" name="languageru" value="{{ $main->languageru }}"
                   placeholder="{{ __('admin.knowledge-of-enter-languages-language-ru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-level-en') }}</label>
            <input type="text" class="form-control" name="levelen" value="{{ $main->levelen }}"
                   placeholder="{{ __('admin.knowledge-of-languages-enter-level-en') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-level-uk') }}</label>
            <input type="text" class="form-control" name="leveluk" value="{{ $main->leveluk }}"
                   placeholder="{{ __('admin.knowledge-of-languages-enter-level-uk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.knowledge-of-languages-level-ru') }}</label>
            <input type="text" class="form-control" name="levelru" value="{{ $main->levelru }}"
                   placeholder="{{ __('admin.knowledge-of-languages-enter-level-ru') }}" required>
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