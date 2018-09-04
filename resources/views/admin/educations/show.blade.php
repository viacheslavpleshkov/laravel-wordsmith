@extends('admin.layouts.main')

@section('title',__('admin.show-educations'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('educations.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('educations.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('educations.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.educations-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.educations-title-en') }}</th>
            <td>{{ $main->titleen }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.educations-title-uk') }}</th>
            <td>{{ $main->titleuk }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.educations-title-ru') }}</th>
            <td>{{ $main->titleru }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.educations-text-en') }}</th>
            <td>{{ $main->texten }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.educations-text-uk') }}</th>
            <td>{{ $main->textuk }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.educations-text-ru') }}</th>
            <td>{{ $main->textru }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.educations-time-en') }}</th>
            <td>{{ $main->timeen }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.educations-time-uk') }}</th>
            <td>{{ $main->timeuk }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.educations-time-ru') }}</th>
            <td>{{ $main->timeru }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.status') }}</th>
            <td>
                @if($main->status)
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.created') }}</th>
            <td>{{ $main->created_at }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.update') }}</th>
            <td>{{ $main->updated_at }}</td>
        </tr>
    </table>
@endsection