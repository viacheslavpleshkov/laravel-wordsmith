@extends('site.layouts.main')

@section('title',__('site.blog-title'))

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <article class="row entry format-standard">

            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    <img src="{{ asset('images/thumbs/single/standard/standard-1000.jpg') }}"
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div>
            </div>

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    {{ $main->title }}
                </h1>
                <ul class="entry__header-meta">
                    <li class="date">{{ $main->created_at }}</li>
                    <li class="byline">
                        {{ __('site.blog-view-by').' '.$main->user->name }}
                    </li>
                    <li class="byline">
                        {{ __('site.blog-view-category').' '.$main->category->name }}
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">
                {!! $main->text !!}

                <div class="entry__author">
                    <img src="{{ asset('images/avatars/user-03.jpg') }}" alt="">

                    <div class="entry__author-about">
                        <h5 class="entry__author-name">
                            <span>{{ __('site.blog-view-posted by') }}</span>
                            <a href="#0">{{ $main->user->name  }}</a>
                        </h5>

                        <div class="entry__author-desc">
                            <p>
                                {{ $main->user->about }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </article>


        <div class="s-content__entry-nav">
            <div class="row s-content__nav">
                <div class="col-six s-content__prev">
                    <a href="{{ route('site.article.view',$previous->url) }}" rel="prev">
                        <span>{{ __('site.blog-view-previous-post') }}</span>
                        {{ $previous->title }}
                    </a>
                </div>
                <div class="col-six s-content__next">
                    <a href="{{ route('site.article.view',$next->url) }}" rel="next">
                        <span>{{ __('site.blog-view-next-post') }}</span>
                        {{ $next->title }}
                    </a>
                </div>
            </div>
        </div>

        <div class="comments-wrap">

            <div id="comments" class="row">
                <div class="col-full">

                    <h3 class="h2">5 Comments</h3>

                    <!-- START commentlist -->
                    <ol class="commentlist">

                        <li class="depth-1 comment">

                            <div class="comment__avatar">
                                <img class="avatar" src="{{ asset('images/avatars/user-01.jpg') }}" alt="" width="50" height="50">
                            </div>

                            <div class="comment__content">

                                <div class="comment__info">
                                    <div class="comment__author">Itachi Uchiha</div>

                                    <div class="comment__meta">
                                        <div class="comment__time">Jun 15, 2018</div>
                                    </div>
                                </div>

                                <div class="comment__text">
                                    <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te
                                        inani ponderum vulputate,
                                        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum
                                        est, ne has voluptua praesent.</p>
                                </div>

                            </div>

                        </li> <!-- end comment level 1 -->

                        <li class="thread-alt depth-1 comment">

                            <div class="comment__avatar">
                                <img class="avatar" src="images/avatars/user-04.jpg" alt="" width="50" height="50">
                            </div>

                            <div class="comment__content">

                                <div class="comment__info">
                                    <div class="comment__author">John Doe</div>

                                    <div class="comment__meta">
                                        <div class="comment__time">Jun 15, 2018</div>
                                        <div class="comment__reply">
                                            <a class="comment-reply-link" href="#0">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment__text">
                                    <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli
                                        et mei. Esse euismod
                                        urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus
                                        contentiones nec ad, nec et
                                        tantas semper delicatissimi.</p>
                                </div>

                            </div>

                            <ul class="children">

                                <li class="depth-2 comment">

                                    <div class="comment__avatar">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="" width="50"
                                             height="50">
                                    </div>

                                    <div class="comment__content">

                                        <div class="comment__info">
                                            <div class="comment__author">Kakashi Hatake</div>

                                            <div class="comment__meta">
                                                <div class="comment__time">Jun 15, 2018</div>
                                                <div class="comment__reply">
                                                    <a class="comment-reply-link" href="#0">Reply</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="comment__text">
                                            <p>Duis sed odio sit amet nibh vulputate
                                                cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit
                                                amet nibh vulputate
                                                cursus a sit amet mauris</p>
                                        </div>

                                    </div>

                                    <ul class="children">

                                        <li class="depth-3 comment">

                                            <div class="comment__avatar">
                                                <img class="avatar" src="images/avatars/user-04.jpg" alt="" width="50"
                                                     height="50">
                                            </div>

                                            <div class="comment__content">

                                                <div class="comment__info">
                                                    <div class="comment__author">John Doe</div>

                                                    <div class="comment__meta">
                                                        <div class="comment__time">Jun 15, 2018</div>
                                                        <div class="comment__reply">
                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="comment__text">
                                                    <p>Investigationes demonstraverunt lectores legere me lius quod ii
                                                        legunt saepius. Claritas est
                                                        etiam processus dynamicus, qui sequitur mutationem consuetudium
                                                        lectorum.</p>
                                                </div>

                                            </div>

                                        </li>

                                    </ul>

                                </li>

                            </ul>

                        </li> <!-- end comment level 1 -->

                        <li class="depth-1 comment">

                            <div class="comment__avatar">
                                <img class="avatar" src="images/avatars/user-02.jpg" alt="" width="50" height="50">
                            </div>

                            <div class="comment__content">

                                <div class="comment__info">
                                    <div class="comment__author">Shikamaru Nara</div>

                                    <div class="comment__meta">
                                        <div class="comment__time">Jun 15, 2018</div>
                                        <div class="comment__reply">
                                            <a class="comment-reply-link" href="#0">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment__text">
                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                                        claritatem.</p>
                                </div>

                            </div>

                        </li>  <!-- end comment level 1 -->

                    </ol>
                    <!-- END commentlist -->

                </div> <!-- end col-full -->
            </div> <!-- end comments -->

            <div class="row comment-respond">

                <!-- START respond -->
                <div id="respond" class="col-full">

                    <h3 class="h2">Add Comment <span>Your email address will not be published</span></h3>

                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                        <fieldset>

                            <div class="form-field">
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

                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large full-width"
                                   value="Add Comment" type="submit">

                        </fieldset>
                    </form> <!-- end form -->

                </div>
                <!-- END respond-->

            </div> <!-- end comment-respond -->

        </div> <!-- end comments-wrap -->

    </section> <!-- end s-content -->
@endsection



