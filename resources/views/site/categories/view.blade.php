@extends('site.layouts.main')

@section('title',$title.' | '.__('site.category-title'))

@section('content')
	<section class="s-content s-content--top-padding s-content--narrow">

		<div class="row narrow">
			<div class="col-full s-content__header">
				<h1 class="display-1 display-1--with-line-sep">{{ __('site.categories-title').' '.$title }}</h1>
			</div>
		</div>
		<categories-component :category-id='@json($id)'></categories-component>

	</section>
@endsection
