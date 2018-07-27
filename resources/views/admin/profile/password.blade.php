@extends('admin.layouts.main')

@section('title',__('admin.profile-edit-password'))

@section('content')
    @include('admin.includes.title')
    @if (session()->has('errors'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('errors')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form action="{{ route('profile.updatepassword',$main->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>{{ __('admin.profile-new-password') }}</label>
            <input type="password" class="form-control" name="password" placeholder="{{ __('admin.profile-enter-password') }}"
                   required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.profile-confirm-password') }}</label>
            <input type="password" class="form-control" name="confirmpassword"
                   placeholder="{{ __('admin.profile-enter-confirm-password') }}" required>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection