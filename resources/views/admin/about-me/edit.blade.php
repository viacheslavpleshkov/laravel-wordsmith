@extends('admin.layouts.main')

@section('title',__('admin.edit-about-me'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('about-me.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.about-me-en') }}</label>
            <textarea class="form-control" name="aboutmeen" rows="10"
                      placeholder="{{ __('admin.about-me-enter-en') }}" required>{{ $main->aboutmeen }}</textarea>

        </div>

        <div class="form-group">
            <label>{{ __('admin.about-me-uk') }}</label>
            <textarea class="form-control" name="aboutmeuk" rows="10"
                      placeholder="{{ __('admin.about-me-enter-uk') }}" required>{{ $main->aboutmeuk }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.about-me-ru') }}</label>
            <textarea class="form-control" name="aboutmeru" rows="10"
                      placeholder="{{ __('about-me-enter-ru') }}" required>{{ $main->aboutmeru }}</textarea>
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