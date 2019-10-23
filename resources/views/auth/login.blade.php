@extends('site.layouts.main')

@section('title', __('auth.login-title'))

@section('requiredJS')

    {!!  GoogleReCaptchaV3::render(['login_id'=>'login']) !!}

@endsection

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">{{ __('auth.login-title') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-full s-content__main">
                @include('auth.includes.success')
                @include('auth.includes.error')
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <fieldset>
                        <div>
                            <label for="sampleInput">{{ __('auth.e-mail-address') }}</label>
                            <input name="email" id="cName" class="full-width {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('auth.enter-e-mail-address') }}" value="" type="email" required>
                        </div>

                        <div>
                            <label for="sampleInput">{{ __('auth.password') }}</label>
                            <input id="password" type="password" class="full-width{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('auth.enter-password') }}" required>
                        </div>
                        <div id="login_id" style="display:none"></div>
                        <p>This site is protected by reCAPTCHA and the Google
                            <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and
                            <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.</p>
                        <button type="submit" class="submit btn btn--primary btn--large full-width">{{ __('auth.login') }}</button>
                        <a href="{{ route('social.github') }}" class="submit btn btn-github btn--large full-width" target="_blank">{{ __('auth.login-with-github') }}</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
@endsection
