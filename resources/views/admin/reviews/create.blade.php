@extends('admin.layouts.main')

@section('title',__('admin.create-reviews'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>{{ __('admin.reviews-user') }}</label>
            <select class="form-control" name="user_id" required>
                @foreach($user as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.reviews-product') }}</label>
            <select class="form-control" name="product_id" required>
                @foreach($product as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('admin.reviews-text') }}</label>
            <textarea class="form-control" name="text" placeholder="{{ __('admin.reviews-enter-text') }}"
                      rows="10" required>{{ old('text') }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('admin.status') }}</label>
            <select class="form-control" name="status" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.create') }}</button>
    </form>
@endsection