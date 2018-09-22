@extends('admin.layouts.main')

@section('title',__('admin.reviews-title'))

@section('content')
    <div class="row justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-lg-9">
            <div class="d-flex">
                <h1 class="h2">@yield('title')</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="pull-right">
                <a class="btn btn-original" href="{{ route('reviews.create') }}">{{ __('admin.create-reviews') }}</a>
            </div>
        </div>
    </div>
    @include('admin.includes.success')
    <div class="table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th scope="col">{{ __('admin.reviews-id') }}</th>
                <th scope="col">{{ __('admin.reviews-user') }}</th>
                <th scope="col">{{ __('admin.reviews-product') }}</th>
                <th scope="col">{{ __('admin.reviews-text') }}</th>
                <th scope="col">{{ __('admin.status') }}</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($main as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td scope="row">{{ $item->user->name }}</td>
                    <td scope="row">{{ $item->product->name }}</td>
                    <td scope="row">{{ $item->text }}</td>
                    <td scope="row">
                        @if($item->status)
                            {{ __('admin.enabled') }}
                        @else
                            {{ __('admin.disabled') }}
                        @endif
                    </td>
                    <td scope="row">
                        <a href="{{ route('reviews.show',$item->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('reviews.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('reviews.destroy',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
