@extends('site.layouts.main')

@section('title',__('site.profile-edit-profile'))

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">{{ __('site.profile-edit-profile') }}</h1>
            </div>
        </div>
        @include('admin.includes.error')
        <div class="row">
            <form action="{{ route('profile.edit',$main->id) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset>
                    <div>
                        <label>{{ __('site.profile-name') }}</label>
                        <input type="text" class="full-width" name="name" value="{{ $main->name }}"
                               placeholder="{{ __('site.profile-enter-name') }}" required>
                    </div>

                    <div>
                        <label>{{ __('site.profile-email') }}</label>
                        <input type="email" class="full-width" name="email" value="{{ $main->email }}"
                               placeholder="{{ __('site.profile-enter-email') }}" required>
                    </div>
                    <div>
                        <label>{{ __('site.profile-about') }}</label>
                        <textarea class="full-width" name="about" placeholder="{{ __('site.profile-enter-about') }}"
                                  required>{{ $main->about }}</textarea>
                    </div>
                </fieldset>


                <button class="submit btn btn--primary btn--large full-width" type="submit">{{ __('site.edit') }}</button>
            </form>

        </div>
    </section>
@endsection