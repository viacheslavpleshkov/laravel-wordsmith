@extends('auth.layouts.auth')

@section('title', __('auth.reset-password-title'))

@section('content')
    <form method="post" action="{{ route('password.request') }}" class="form-signin">
        @csrf
        <div class="text-center mb-4">
            <img class="mb-4" id="logo" src="{{ asset ('images/logo.jpg')}}" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">@yield('title')</h1>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">{{ __('auth.e-mail-address') }}</label>
            <div class="col-sm-8">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ $email ?? old('email') }}" required autofocus>

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
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">{{ __('auth.confirm-password') }}</label>
            <div class="col-sm-8">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
            <button class="btn btn-lg btn-primary btn-block"
                    type="submit">{{ __('auth.reset-password') }}</button>
            <a class="btn btn-link" href="{{ route('site.index') }}">{{ __('auth.back-to-the-site') }}</a>
            <a class="btn btn-link" href="{{ route('login') }}">{{ __('auth.login') }}</a>
            <a class="btn btn-link" href="{{ route('register') }}">{{ __('auth.register') }}</a>
        </div>
    </form>
@endsection
