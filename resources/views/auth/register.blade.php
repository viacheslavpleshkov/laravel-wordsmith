@extends('auth.layouts.auth')

@section('title', __('auth.register-title'))

@section('content')
    <form method="post" action="{{ route('register') }}" class="form-signin">
        @csrf
        <div class="text-center mb-4">
            <img class="mb-4" id="logo" src="{{ asset ('images/logo.jpg')}}" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">@yield('title')</h1>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">{{ __('auth.name') }}</label>

            <div class="col-sm-8">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                       name="name"
                       value="{{ old('name') }}" placeholder="{{ __('auth.enter-name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">{{ __('auth.e-mail-address') }}</label>
            <div class="col-sm-8">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
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
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       name="password" placeholder="{{ __('auth.enter-password') }}" required autofocus>
                @if ($errors->has('password'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">{{ __('auth.confirm-password') }}</label>
            <div class="col-sm-8">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                       placeholder="{{ __('auth.enter-confirm-password') }}" required autofocus>
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

        <div class="text-center">
            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('auth.register') }}</button>
            <a class="btn btn-lg btn-github btn-block"
               href="{{ url('auth/socialite/github') }}">{{ __('auth.register-with-github') }}</a>
            <a class="btn btn-lg btn-google btn-block"
               href="{{ url('auth/socialite/google') }}">{{ __('auth.register-with-google+') }}</a>
            <a class="btn btn-lg btn-facebook btn-block"
               href="{{ url('auth/socialite/facebook') }}">{{ __('auth.register-with-facebook') }}</a>
            <a class="btn btn-lg btn-twitter btn-block"
               href="{{ url('auth/socialite/twitter') }}">{{ __('auth.register-with-twitter') }}</a>
            <a class="btn btn-link" href="{{ route('site.index') }}">{{ __('auth.back-to-the-site') }}</a>
            <a class="btn btn-link" href="{{ route('login') }}">{{ __('auth.login') }}</a>
            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('auth.forgot-your-password') }}</a>
        </div>
    </form>
@endsection