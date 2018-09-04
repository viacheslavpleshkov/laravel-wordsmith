@extends('admin.layouts.main')

@section('title',__('admin.settings-title'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    @include('admin.includes.success')
    <form action="{{ route('admin.settings') }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.settings-nameen') }}</label>
            <input type="text" class="form-control" name="nameen" value="{{ $main->nameen }}"
                   placeholder="{{ __('admin.settings-enter-nameen') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-nameuk') }}</label>
            <input type="text" class="form-control" name="nameuk" value="{{ $main->nameuk }}"
                   placeholder="{{ __('admin.settings-enter-nameuk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-nameru') }}</label>
            <input type="text" class="form-control" name="nameru" value="{{ $main->nameru }}"
                   placeholder="{{ __('admin.settings-enter-nameru') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-descriptionen') }}</label>
            <input type="text" class="form-control" name="descriptionen" value="{{ $main->descriptionen }}"
                   placeholder="{{ __('admin.settings-enter-descriptionen') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-descriptionuk') }}</label>
            <input type="text" class="form-control" name="descriptionuk" value="{{ $main->descriptionuk }}"
                   placeholder="{{ __('admin.settings-enter-descriptionuk') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-descriptionru') }}</label>
            <input type="text" class="form-control" name="descriptionru" value="{{ $main->descriptionru }}"
                   placeholder="{{ __('admin.settings-enter-descriptionru') }}" required>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection