@extends('site.layouts.main')

@section('title', $main->seo->title)

@section('content')
    @include(('site.includes.featured'))
    <section class="s-content">
        <articles-component></articles-component>
    </section>
@endsection

