@extends('admin.layouts.main')

@section('title',__('admin.comments-title'))

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
				<a class="btn btn-original" href="{{ route('comments.create') }}">{{ __('admin.create-comments') }}</a>
			</div>
		</div>
	</div>
	@include('admin.includes.success')
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
			<tr>
				<th scope="col">{{ __('admin.comments-id') }}</th>
				<th scope="col">{{ __('admin.comments-user') }}</th>
				<th scope="col">{{ __('admin.comments-article') }}</th>
				<th scope="col">{{ __('admin.status') }}</th>
				<th scope="col"></th>
			</tr>
			</thead>
			<tbody>
			@foreach($main as $item)
				<tr>
					<th scope="row">{{ $item->id }}</th>
					<td>{{ $item->user->name }}</td>
					<td>{{ $item->article->title.' ('.$item->article->id.')' }}</td>
					<td>
						@if($item->status)
							{{ __('admin.enabled') }}
						@else
							{{ __('admin.disabled') }}
						@endif
					</td>
					<td>
						<a href="{{ route('comments.show',$item->id) }}"><i class="far fa-eye"></i></a>
						<a href="{{ route('comments.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
						<form action="{{ route('comments.destroy',$item->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit"><i class="fas fa-trash-alt"></i></button>
						</form>
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