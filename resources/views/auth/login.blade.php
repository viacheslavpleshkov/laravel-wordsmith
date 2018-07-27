@extends('auth.layouts.main')

@section('title', __('auth.login-title'))

@section('content')
    <form method="post" action="{{ route('login') }}" class="form-signin">
        @csrf
        @include('auth.includes.success')
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">{{ __('auth.e-mail-address') }}</label>
            <div class="col-sm-8">
                <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}" placeholder="{{ __('auth.enter-e-mail-address') }}" required
                       autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">{{ __('auth.password') }}</label>
            <div class="col-sm-8">
                <input id="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       name="password" placeholder="{{ __('auth.enter-password') }}" required autofocus>
                @if ($errors->has('password'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">{{ __('auth.captcha') }}</label>
            <div class="col-sm-8">
                {!! NoCaptcha::display(['data-theme' => 'light','data-size'=>'normal']) !!}
                @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4">{{ __('auth.login-checkbox') }}</div>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"
                           name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridCheck1">
                        {{ __('auth.remember-me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('auth.login') }}</button>
            <a href="{{ url('admin/socialite/github') }}"
               class="btn btn-lg btn-github group ml-1">{{ __('auth.login-with-github') }}</a>
            <a href="{{ url('admin/socialite/google') }}"
               class="btn btn-lg btn-google group ml-1">{{ __('auth.login-with-google+') }}</a>
            <a href="{{ url('admin/socialite/facebook') }}"
               class="btn btn-lg btn-facebook group ml-1">{{ __('auth.login-with-facebook') }}</a>
            <a href="{{ url('admin/socialite/twitter') }}"
               class="btn btn-lg btn-twitter group ml-1">{{ __('auth.login-with-twitter') }}</a>
            <a class="btn btn-link" href="{{ route('site.index') }}">{{ __('auth.back-to-the-site') }}</a>
            <a class="btn btn-link" href="{{ route('register') }}">{{ __('auth.register') }}</a>
            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('auth.forgot-your-password') }}</a>
        </div>
    </form>
@endsection