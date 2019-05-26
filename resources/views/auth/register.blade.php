@extends('site.layouts.main')

@section('title', __('auth.register-title'))

@section('requiredJS')

	{!!  GoogleReCaptchaV3::render(['register_id'=>'register']) !!}

@endsection

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
				@include('auth.includes.error')
				<form method="post" action="{{ route('register') }}">
					@csrf
					<fieldset>
						<div>
							<label class="sampleInput">{{ __('auth.name') }}</label>
							<input id="name" type="text" class="full-width{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="{{ __('auth.enter-name') }}" required autofocus>
						</div>

						<div>
							<label class="sampleInput">{{ __('auth.e-mail-address') }}</label>
							<input id="email" type="email" class="full-width{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('auth.enter-e-mail-address') }}" required autofocus>
						</div>

						<div>
							<label class="sampleInput">{{ __('auth.password') }}</label>
							<input id="password" type="password" class="full-width{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('auth.enter-password') }}" required autofocus>
						</div>

						<div>
							<label class="sampleInput">{{ __('auth.confirm-password') }}</label>
							<input id="password-confirm" type="password" class="full-width" name="password_confirmation" placeholder="{{ __('auth.enter-confirm-password') }}" required autofocus>
						</div>
						<div id="register_id" style="display:none"></div>
						<p>This site is protected by reCAPTCHA and the Google
							<a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and
							<a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.</p>
						<button type="submit" class="submit btn btn--primary btn--large full-width">{{ __('auth.register') }}</button>
					</fieldset>
				</form>
			</div>
		</div>
	</section>
@endsection