@extends('admin.layouts.main')

@section('title',__('admin.roles-title'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.success')
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">{{ __('admin.roles-id') }}</th>
                <th scope="col">{{ __('admin.roles-name') }}</th>
                <th scope="col">{{ __('admin.roles-description') }}</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($main as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}
                    </td>
                    <td>
                        <a href="{{ route('roles.show',$item->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('roles.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
            @if(isset($main) && count($main) === 0)
                <td colspan="100%" class="text-center">{{ __('admin.no-data-table') }}</td>
            @endif
            </tbody>
        </table>
        <div class="pagination justify-content-center">
            {{ $main->links() }}
        </div>
    </div>
@endsection