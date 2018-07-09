@extends('layouts.main')

@section('title', 'Нагадати пароль')

@section('content')
    <div class="card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Нагадати пароль') }}">
                @csrf

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

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit"
                                class="btn btn-lg btn-primary btn-block">{{ __('Надіслати посилання видалити пароль') }}</button>
                        <a class="btn btn-link" href="{{ route('site.index') }}">{{ __('← Назад до сайту') }}</a>
                        <a class="btn btn-link" href="{{ route('login') }}">{{ __('Увійти') }}</a>
                        <a class="btn btn-link" href="{{ route('register') }}">{{ __('Зареєструватися') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{ Widget::News() }}
@endsection
