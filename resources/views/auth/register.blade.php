@extends('layouts.main')

@section('title', 'Реєстрація')

@section('content')
     <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Реєстрація') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ім\'я') }}</label>

                        <div class="col-md-8">
                            <input id="name" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                   value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-right">{{ __('Адреса електронної пошти') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" required>

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
                        <label for="password-confirm"
                               class="col-md-4 col-form-label text-md-right">{{ __('Підтвердити пароль') }}</label>

                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Зареєструватися') }}</button>
                            <a class="btn btn-lg btn-github btn-block"
                               href="{{ url('admin/socialite/github') }}">{{ __('Зареєструйтеся за допомогою GitHub') }}</a>
                            <a class="btn btn-lg btn-google btn-block"
                               href="{{ url('admin/socialite/google') }}">{{ __('Зареєструйтеся за допомогою Google+') }}</a>
                            <a class="btn btn-lg btn-facebook btn-block"
                               href="{{ url('admin/socialite/facebook') }}">{{ __('Зареєструйтеся за допомогою Facebook') }}</a>
                            <a class="btn btn-lg btn-twitter btn-block"
                               href="{{ url('admin/socialite/twitter') }}">{{ __('Зареєструйтеся за допомогою Twitter') }}</a>
                            <a class="btn btn-link" href="{{ route('site.index') }}">{{ __('← Назад до сайту') }}</a>
                            <a class="btn btn-link" href="{{ route('login') }}">{{ __('Увійти') }}</a>
                            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Забули свій пароль?') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     {{ Widget::News() }}
@endsection
