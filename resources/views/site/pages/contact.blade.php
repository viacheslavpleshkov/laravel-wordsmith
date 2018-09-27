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

                    <form class="contact-form" method="post" action="{{ route('site.contact') }}">
                        <fieldset>

                            <div>
                                <input name="name" class="full-width"
                                       placeholder="{{ __('site.contact-contactform-yourname') }}"
                                       value="{{ old('name') }}" type="text">
                            </div>

                            <div class="form-field">
                                <input name="email" class="full-width"
                                       placeholder="{{ __('site.contact-contactform-youremail') }}"
                                       value="{{ old('email') }}"
                                       type="text">
                            </div>

                            <div class="form-field">
                                <input name="website" class="full-width"
                                       placeholder="{{ __('site.contact-contactform-website') }}"
                                       value="{{ old('website') }}" type="text">
                            </div>

                            <div class="message form-field">
                                <textarea name="message" class="full-width"
                                          placeholder="{{ __('site.contact-contactform-yourmessage') }}">{{ old('message') }}</textarea>
                            </div>

                            <button type="submit"
                                    class="submit btn btn--primary btn--large full-width">{{ __('site.contact-contactform-sendmessage') }}
                            </button>

                        </fieldset>
                    </form>

                </div>
            </div>
        @endif
    </section>
@endsection
