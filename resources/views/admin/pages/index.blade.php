@extends('admin.layouts.main')

@section('title',__('admin.pages-title'))

@section('content')
	<div class="row justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="col-lg-12">
			<div class="d-flex">
				<h1 class="h2">@yield('title')</h1>
				<div class="btn-toolbar mb-2 mb-md-0">
				</div>
			</div>
		</div>
	</div>
	@include('admin.includes.success')
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
			<tr>
				<th scope="col">{{ __('admin.pages-id') }}</th>
				<th scope="col">{{ __('admin.pages-name') }}</th>
				<th scope="col">{{ __('admin.social-link-url') }}</th>
				<th scope="col">{{ __('admin.pages-seo') }}</th>
				<th scope="col"></th>
			</tr>
			</thead>
			<tbody>
			@foreach($main as $item)
				<tr>
					<th scope="row">{{ $item->id }}</th>
					<td>{{ $item->title }}</td>
					<td>{{ url('/').$item->url }}</td>
					<td>{{ $item->seo->title.' ('.$item->seo->id.')' }}</td>
					<td>
						<a href="{{ route('pages.show',$item->id) }}"><i class="far fa-eye"></i></a>
						<a href="{{ route('pages.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
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