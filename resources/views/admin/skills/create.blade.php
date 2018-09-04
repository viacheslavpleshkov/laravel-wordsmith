@extends('admin.layouts.main')

@section('title',__('admin.create-skills'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.skills-titles') }}</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                   placeholder="{{ __('admin.skills-enter-title') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.skills-level') }}</label>
            <input type="text" class="form-control" name="level" value="{{ old('level') }}"
                   placeholder="{{ __('admin.skills-enter-level') }}" required>
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