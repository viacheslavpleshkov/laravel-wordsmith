@extends('site.layouts.main')

@section('title', __('auth.register-title'))

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">{{ __('auth.register-title') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-full s-content__main">
                @include('auth.includes.success')
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <fieldset>
                        <div>
                            <label class="sampleInput">{{ __('auth.name') }}</label>
                            <input id="name" type="text"
                                   class="full-width{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name"
                                   value="{{ old('name') }}" placeholder="{{ __('auth.enter-name') }}" required
                                   autofocus>
                            @if ($errors->has('name'))
                                <div class="alert-box alert-box--error hideit">
                                    <p>{{ $errors->first('name') }}</p>
                                    <i class="fa fa-times alert-box__close"></i>
                                </div>
                            @endif
                        </div>

                        <div>
                            <label class="sampleInput">{{ __('auth.e-mail-address') }}</label>
                            <input id="email" type="email"
                                   class="full-width{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}"
                                   placeholder="{{ __('auth.enter-e-mail-address') }}" required
                                   autofocus>
                            @if ($errors->has('email'))
                                <div class="alert-box alert-box--error hideit">
                                    <p>{{ $errors->first('email') }}</p>
                                    <i class="fa fa-times alert-box__close"></i>
                                </div>
                            @endif
                        </div>

                        <div>
                            <label class="sampleInput">{{ __('auth.password') }}</label>
                            <input id="password" type="password"
                                   class="full-width{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" placeholder="{{ __('auth.enter-password') }}" required autofocus>
                            @if ($errors->has('password'))
                                <div class="alert-box alert-box--error hideit">
                                    <p>{{ $errors->first('password') }}</p>
                                    <i class="fa fa-times alert-box__close"></i>
                                </div>
                            @endif
                        </div>

                        <div>
                            <label class="sampleInput">{{ __('auth.confirm-password') }}</label>
                            <input id="password-confirm" type="password" class="full-width"
                                   name="password_confirmation"
                                   placeholder="{{ __('auth.enter-confirm-password') }}" required autofocus>
                        </div>

                        <button type="submit"
                                class="submit btn btn--primary btn--large full-width">{{ __('auth.register') }}</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
@endsection