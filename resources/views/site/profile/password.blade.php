@extends('site.layouts.main')

@section('title',__('site.profile-edit-password'))

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">{{ __('site.profile-edit-password') }}</h1>
            </div>
        </div>
        <div class="row">

            @if (session()->has('errors'))
                <div class="alert-box alert-box--error hideit">
                    <p>{{session('errors')}}</p>
                    <i class="fa fa-times alert-box__close"></i>
                </div>
            @endif
            <form action="{{ route('profile.password',$main->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label>{{ __('site.profile-new-password') }}</label>
                    <input type="password" class="full-width" name="password"
                           placeholder="{{ __('site.profile-enter-password') }}"
                           required>
                </div>

                <div class="form-group">
                    <label>{{ __('site.profile-confirm-password') }}</label>
                    <input type="password" class="full-width" name="confirmpassword"
                           placeholder="{{ __('site.profile-enter-confirm-password') }}" required>
                </div>

                <button class="submit btn btn--primary btn--large full-width"
                        type="submit">{{ __('site.edit') }}</button>
            </form>
        </div>
    </section>
@endsection