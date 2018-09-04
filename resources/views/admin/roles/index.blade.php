@extends('admin.layouts.main')

@section('title',__('admin.roles-title'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.success')
    <div class="table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
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
                    <td scope="row">{{ $item->name }}</td>
                    <td scope="row">{{ $item->description }}
                    </td>
                    <td scope="row">
                        <a href="{{ route('roles.show',$item->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('roles.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection