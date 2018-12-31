@extends('site.layouts.main')

@section('title', $main->seo->title)

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">{{ $main->title }}</h1>
                <p class="lead">{{ $main->content_header }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                {!! $main->text !!}
            </div>
        </div>
        @if($setting->contactform)
            <div class="row">
                <div class="col-full s-content__main">
                    <h4>{{ __('site.contact-contactform-title') }}</h4>
                    @if (session('success'))
                        <div class="alert-box alert-box--success hideit">
                            <p>{{ session('success') }}</p>
                            <i class="fa fa-times alert-box__close"></i>
                        </div>
                    @endif
                    <form class="contact-form" action="{{ route('site.contact') }}" method="post">
                        @csrf
                        <fieldset>
                            <div>
                                <input name="name" class="full-width"
                                       placeholder="{{ __('site.contact-contactform-yourname') }}"
                                       value="{{ old('name') }}" type="text">
                                @if ($errors->has('name'))
                                    <div class="alert-box alert-box--error hideit">
                                        <p>{{ $errors->first('name') }}</p>
                                        <i class="fa fa-times alert-box__close"></i>
                                    </div>
                                @endif
                            </div>

                            <div class="form-field">
                                <input name="email" class="full-width"
                                       placeholder="{{ __('site.contact-contactform-youremail') }}"
                                       value="{{ old('email') }}"
                                       type="text">
                                @if ($errors->has('email'))
                                    <div class="alert-box alert-box--error hideit">
                                        <p>{{ $errors->first('email') }}</p>
                                        <i class="fa fa-times alert-box__close"></i>
                                    </div>
                                @endif
                            </div>

                            <div class="form-field">
                                <input name="website" class="full-width"
                                       placeholder="{{ __('site.contact-contactform-website') }}"
                                       value="{{ old('website') }}" type="text">
                                @if ($errors->has('website'))
                                    <div class="alert-box alert-box--error hideit">
                                        <p>{{ $errors->first('website') }}</p>
                                        <i class="fa fa-times alert-box__close"></i>
                                    </div>
                                @endif
                            </div>

                            <div class="message form-field">
                                <textarea name="message" class="full-width"
                                          placeholder="{{ __('site.contact-contactform-yourmessage') }}">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <div class="alert-box alert-box--error hideit">
                                        <p>{{ $errors->first('message') }}</p>
                                        <i class="fa fa-times alert-box__close"></i>
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="submit btn btn--primary btn--large full-width">{{ __('site.contact-contactform-sendmessage') }}
                            </button>

                        </fieldset>
                    </form>

                </div>
            </div>
        @endif
    </section>
@endsection
