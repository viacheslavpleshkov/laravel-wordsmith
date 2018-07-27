@extends('auth.layouts.main')

@section('title', __('auth.reset-password-title'))

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="post" action="{{ route('password.email') }}" class="form-signin">
        @csrf
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
            <button class="btn btn-lg btn-original btn-block"
                    type="submit">{{ __('auth.send-password-reset-link') }}</button>
            <a class="btn btn-link" href="{{ route('site.index') }}">{{ __('auth.back-to-the-site') }}</a>
            <a class="btn btn-link" href="{{ route('login') }}">{{ __('auth.login') }}</a>
            <a class="btn btn-link" href="{{ route('register') }}">{{ __('auth.register') }}</a>
        </div>
    </form>
@endsection