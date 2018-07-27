@extends('admin.layouts.main')

@section('title',__('admin.edit-skills'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('skills.update',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.skills-title') }}</label>
            <input type="text" class="form-control" name="title" value="{{ $main->title }}"
                   placeholder="{{ __('admin.skills-enter-title') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.skills-level') }}</label>
            <input type="text" class="form-control" name="level" value="{{ $main->level }}"
                   placeholder="{{ __('admin.skills-enter-level') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.skills-status') }}</label>
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