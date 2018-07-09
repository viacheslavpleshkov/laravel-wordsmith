@extends('layouts.main')

@section('title', 'Увійти')

@section('content')
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Увійти') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email"
                               class="col-sm-4 col-form-label text-md-right">{{ __('Адреса електронної пошти') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                        <div class="col-md-8">
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Пам\'ятай мене') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Увійти') }}</button>
                            <a href="{{ url('admin/socialite/github') }}"
                               class="btn btn-lg btn-github group">{{ __('Увійти через GitHub') }}</a>
                            <a href="{{ url('admin/socialite/google') }}"
                               class="btn btn-lg btn-google group">{{ __('Увійти через Google+') }}</a>
                            <a href="{{ url('admin/socialite/facebook') }}"
                               class="btn btn-lg btn-facebook group">{{ __('Увійти через Facebook') }}</a>
                            <a href="{{ url('admin/socialite/twitter') }}"
                               class="btn btn-lg btn-twitter group">{{ __('Увійти через Twitter') }}</a>
                            <a class="btn btn-link" href="{{ route('site.index') }}">{{ __('← Назад до сайту') }}</a>
                            <a class="btn btn-link" href="{{ route('register') }}">{{ __('Зареєструватися') }}</a>
                            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Забули свій пароль?') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{ Widget::News() }}
@endsection
