@extends('admin.layouts.main')

@section('title',__('admin.articles-title'))

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
				<a class="btn btn-original"
				   href="{{ route('articles.create') }}">{{ __('admin.create-articles') }}</a>
			</div>
		</div>
	</div>
	@include('admin.includes.success')
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
			<tr>
				<th scope="col">{{ __('admin.articles-id') }}</th>
				<th scope="col">{{ __('admin.articles-name') }}</th>
				{{--<th scope="col">{{ __('admin.articles-images') }}</th>--}}
				<th scope="col">{{ __('admin.articles-url') }}</th>
				<th scope="col">{{ __('admin.articles-seo') }}</th>
				<th scope="col">{{ __('admin.articles-category') }}</th>
				<th scope="col">{{ __('admin.articles-views') }}</th>
				<th scope="col">{{ __('admin.status') }}</th>
				<th scope="col"></th>
			</tr>
			</thead>
			<tbody>
			@foreach($main as $item)
				<tr>
					<th scope="row">{{ $item->id }}</th>
					<td>{{ $item->title }}</td>
					{{--<td scope="row"><img src="{{ asset('storage/'.$item->images) }}" width="100px"></td>--}}
					<td scope="row">{{ route('site.article.view',$item->url) }}</td>
					<td>{{ $item->seo->title.' ('.$item->seo->id.')' }}</td>
					<td>{{ $item->category->name.' ('.$item->category->id.')' }}</td>
					<td>{{ $item->views }}</td>
					<td>
						@if($item->status)
							{{ __('admin.enabled') }}
						@else
							{{ __('admin.disabled') }}
						@endif
					</td>
					<td>
						<a href="{{ route('articles.show',$item->id) }}"><i class="far fa-eye"></i></a>
						<a href="{{ route('articles.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
						<form action="{{ route('articles.destroy',$item->id) }}" method="POST">
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
