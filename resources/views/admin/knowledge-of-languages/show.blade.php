@extends('admin.layouts.main')

@section('title',__('admin.show-knowledge-of-languages'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('knowledge-of-languages.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('knowledge-of-languages.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('knowledge-of-languages.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.knowledge-of-languages-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.knowledge-of-languages-language-en') }}</th>
            <td>{{ $main->languageen }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.knowledge-of-languages-language-uk') }}</th>
            <td>{{ $main->languageuk }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.knowledge-of-languages-language-ru') }}</th>
            <td>{{ $main->languageru }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.knowledge-of-languages-level-en') }}</th>
            <td>{{ $main->levelen }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.knowledge-of-languages-level-uk') }}</th>
            <td>{{ $main->leveluk }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.knowledge-of-languages-level-ru') }}</th>
            <td>{{ $main->levelru }}</td>
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