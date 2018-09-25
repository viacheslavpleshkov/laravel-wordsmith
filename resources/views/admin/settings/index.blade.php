@extends('admin.layouts.main')

@section('title',__('admin.settings-title'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    @include('admin.includes.success')
    <form action="{{ route('settings.update') }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.settings-paginate') }}</label>
            <input type="text" class="form-control" name="paginate" value="{{ $main->paginate }}"
                   placeholder="{{ __('admin.settings-enter-paginate') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.settings-contactform') }}</label>
            <select class="form-control" name="contactform" required>
                @if($main->contactform)
                    <option value="1">{{ __('admin.enabled') }}</option>
                    <option value="0">{{ __('admin.disabled') }}</option>
                @else
                    <option value="0">{{ __('admin.disabled') }}</option>
                    <option value="1">{{ __('admin.enabled') }}</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label>{{ __('admin.settings-footer_about') }}</label>
            <textarea class="form-control" rows="5" name="footer_about"
                      placeholder="{{ __('admin.settings-enter-footer_about') }}"
                      required>{{ $main->footer_about }}</textarea>
        </div>


        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection