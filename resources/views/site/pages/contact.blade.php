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
        <div class="row">
            <div class="col-full s-content__main">
                <h4>Get In Touch</h4>

                <form name="cForm" id="cForm" class="contact-form" method="post" action="">
                    <fieldset>

                        <div>
                            <input name="cName" id="cName" class="full-width" placeholder="Your Name*" value=""
                                   type="text">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" id="cEmail" class="full-width" placeholder="Your Email*" value=""
                                   type="text">
                        </div>

                        <div class="form-field">
                            <input name="cWebsite" id="cWebsite" class="full-width" placeholder="Website" value=""
                                   type="text">
                        </div>

                        <div class="message form-field">
                            <textarea name="cMessage" id="cMessage" class="full-width"
                                      placeholder="Your Message*"></textarea>
                        </div>

                        <button type="submit" class="submit btn btn--primary btn--large full-width">Send Message
                        </button>

                    </fieldset>
                </form>

            </div>
        </div>

    </section>
@endsection
