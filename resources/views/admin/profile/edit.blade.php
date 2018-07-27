@extends('admin.layouts.main')

@section('title',__('admin.profile-edit-profile'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('profile.updateedit',$main->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>{{ __('admin.profile-name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ $main->name }}"
                   placeholder="{{ __('admin.profile-enter-name') }}" required>
        </div>

        <div class="form-group">
            <label>{{ __('admin.profile-email') }}</label>
            <input type="email" class="form-control" name="email" value="{{ $main->email }}"
                   placeholder="{{ __('admin.profile-enter-email') }}" required>
        </div>

        <div class="form-group">
            @if($main->github_id)
                <a href="http://slavapleshkov.test/admin/socialite/github"
                   class="btn btn-lg btn-github mr-2 group">{{ __('admin.profile-disconnect-github') }}</a>
            @else
                <a href="http://slavapleshkov.test/admin/socialite/github"
                   class="btn btn-lg btn-github mr-2 group">{{ __('admin.profile-connect-github') }}</a>
            @endif
            @if($main->google_id)
                <a href="http://slavapleshkov.test/admin/socialite/google"
                   class="btn btn-lg btn-google mr-2 group">{{ __('admin.profile-disconnect-google') }}</a>
            @else
                <a href="http://slavapleshkov.test/admin/socialite/google"
                   class="btn btn-lg btn-google mr-2 group">{{ __('admin.profile-connect-google') }}</a>
            @endif
            @if($main->facebook_id)
                <a href="http://slavapleshkov.test/admin/socialite/facebook"
                   class="btn btn-lg btn-facebook mr-2 group">{{ __('admin.profile-disconnect-facebook') }}</a>
            @else
                <a href="http://slavapleshkov.test/admin/socialite/facebook"
                   class="btn btn-lg btn-facebook mr-2 group">{{ __('admin.profile-connect-facebook') }}</a>
            @endif
            @if($main->twitter_id)
                <a href="http://slavapleshkov.test/admin/socialite/twitter"
                   class="btn btn-lg btn-twitter mr-2 group">{{ __('admin.profile-disconnect-twitter') }}</a>
            @else
                <a href="http://slavapleshkov.test/admin/socialite/twitter"
                   class="btn btn-lg btn-twitter mr-2 group">{{ __('admin.profile-connect-twitter') }}</a>
            @endif
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.edit') }}</button>
    </form>
@endsection