@extends('admin.layouts.main')

@section('title',__('admin.profile-title'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.success')
    <table class="table">
        <tr>
            <th>{{ __('admin.profile-name') }}</th>
            <td>{{ $main->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.profile-email') }}</th>
            <td>{{ $main->email }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.profile-password') }}</th>
            <td>
                @if( $main->password )
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif</td>
        </tr>
        <tr>
            <th>{{ __('admin.profile-github') }}</th>
            <td>
                @if( $main->github_id )
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.profile-google') }}</th>
            <td>
                @if( $main->google_id )
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.profile-facebook') }}</th>
            <td>
                @if( $main->facebook_id )
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.profile-twitter') }}</th>
            <td>
                @if( $main->twitter_id )
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.profile-role') }}</th>
            <td>{{ $main->role->name }}</td>
        </tr>
    </table>
    <a href="{{ route('profile.edit',$main->id) }}" class="btn btn-success">{{ __('admin.profile-edit-profile') }}</a>
    <a href="{{ route('profile.password',$main->id) }}" class="btn btn-primary">{{ __('admin.profile-edit-password') }}</a>
    <form action="{{ route('profile.destroy',$main->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">{{ __('admin.profile-delete-user') }}</button>
    </form>
@endsection