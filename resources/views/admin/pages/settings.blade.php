@extends('admin.layouts.main')

@section('title','Settings')

@section('content')
    @include('admin.includes.title')
    <table class="table">
        <tr>
            <th>{{ __('APP_NAME') }}</th>
            <td> {{ env('APP_NAME') }}</td>
        </tr>
        <tr>
            <th>{{ __('APP_ENV') }}</th>
            <td>{{ env('APP_ENV') }}</td>
        </tr>
        <tr>
            <th>{{ __('APP_KEY') }}</th>
            <td>{{ env('APP_KEY') }}</td>
        </tr>
        <tr>
            <th>{{ __('APP_DEBUG') }}</th>
            <td>{{ env('APP_DEBUG') }}</td>
        </tr>
        <tr>
            <th>{{ __('APP_URL') }}</th>
            <td>{{ env('APP_URL') }}</td>
        </tr>
        <tr>
            <th>{{ __('LOG_CHANNEL') }}</th>
            <td>{{ env('LOG_CHANNEL') }}</td>
        </tr>
        <tr>
            <th>{{ __('DB_CONNECTION') }}</th>
            <td>{{ env('DB_CONNECTION') }}</td>
        </tr>
        <tr>
            <th>{{ __('DB_HOST') }}</th>
            <td>{{ env('DB_HOST') }}</td>
        </tr>
        <tr>
            <th>{{ __('DB_PORT') }}</th>
            <td>{{ env('DB_PORT') }}</td>
        </tr>
        <tr>
            <th>{{ __('DB_DATABASE') }}</th>
            <td>{{ env('DB_DATABASE') }}</td>
        </tr>
        <tr>
            <th>{{ __('BROADCAST_DRIVER') }}</th>
            <td>{{ env('BROADCAST_DRIVER') }}</td>
        </tr>
        <tr>
            <th>{{ __('CACHE_DRIVER') }}</th>
            <td>{{ env('CACHE_DRIVER') }}</td>
        </tr>
        <tr>
            <th>{{ __('SESSION_DRIVER') }}</th>
            <td>{{ env('SESSION_DRIVER') }}</td>
        </tr>
        <tr>
            <th>{{ __('SESSION_LIFETIME') }}</th>
            <td>{{ env('SESSION_LIFETIME') }}</td>
        </tr>
        <tr>
            <th>{{ __('QUEUE_DRIVER') }}</th>
            <td>{{ env('QUEUE_DRIVER') }}</td>
        </tr>
        <tr>
            <th>{{ __('GITHUB_ID') }}</th>
            <td>{{ env('GITHUB_ID') }}</td>
        </tr>
        <tr>
            <th>{{ __('GITHUB_SECRET') }}</th>
            <td>{{ env('GITHUB_SECRET') }}</td>
        </tr>
        <tr>
            <th>{{ __('GITHUB_URL') }}</th>
            <td>{{ env('GITHUB_URL') }}</td>
        </tr>
        <tr>
            <th>{{ __('GOOGLE_ID') }}</th>
            <td>{{ env('GOOGLE_ID') }}</td>
        </tr>
        <tr>
            <th>{{ __('GOOGLE_SECRET') }}</th>
            <td>{{ env('GOOGLE_SECRET') }}</td>
        </tr>
        <tr>
            <th>{{ __('GOOGLE_URL') }}</th>
            <td>{{ env('GOOGLE_URL') }}</td>
        </tr>
        <tr>
            <th>{{ __('FACEBOOK_ID') }}</th>
            <td>{{ env('FACEBOOK_ID') }}</td>
        </tr>
        <tr>
            <th>{{ __('FACEBOOK_SECRET') }}</th>
            <td>{{ env('FACEBOOK_SECRET') }}</td>
        </tr>
        <tr>
            <th>{{ __('FACEBOOK_URL') }}</th>
            <td>{{ env('FACEBOOK_URL') }}</td>
        </tr>
        <tr>
            <th>{{ __('TWITTER_ID') }}</th>
            <td>{{ env('TWITTER_ID') }}</td>
        </tr>
        <tr>
            <th>{{ __('TWITTER_SECRET') }}</th>
            <td>{{ env('TWITTER_SECRET') }}</td>
        </tr>
        <tr>
            <th>{{ __('TWITTER_URL') }}</th>
            <td>{{ env('TWITTER_URL') }}</td>
        </tr>
        <tr>
            <th>{{ __('GOOGLE_SECRET') }}</th>
            <td>{{ env('GOOGLE_SECRET') }}</td>
        </tr>
        <tr>
            <th>{{ __('MAIL_DRIVER') }}</th>
            <td>{{ env('MAIL_DRIVER') }}</td>
        </tr>
        <tr>
            <th>{{ __('MAIL_HOST') }}</th>
            <td>{{ env('MAIL_HOST') }}</td>
        </tr>
        <tr>
            <th>{{ __('MAIL_PORT') }}</th>
            <td>{{ env('MAIL_PORT') }}</td>
        </tr>
        <tr>
            <th>{{ __('MAIL_USERNAME') }}</th>
            <td>{{ env('MAIL_USERNAME') }}</td>
        </tr>
        <tr>
            <th>{{ __('MAIL_PASSWORD') }}</th>
            <td>{{ env('MAIL_PASSWORD') }}</td>
        </tr>
        <tr>
            <th>{{ __('MAIL_ENCRYPTION') }}</th>
            <td>{{ env('MAIL_ENCRYPTION') }}</td>
        </tr>
    </table>
@endsection