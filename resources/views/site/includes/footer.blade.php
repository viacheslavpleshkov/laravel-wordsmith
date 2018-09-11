<footer class="s-footer">
    <div class="s-footer__main">
        <div class="row">
            {{ Widget::About() }}
            <div class="col-six tab-full s-footer__subscribe">
                <h4>Our Newsletter</h4>
                <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>
                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true" action="" method="post">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Send">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="s-footer__bottom">
        <div class="row">
            {{ Widget::Sociallink() }}
            <div class="col-six">
                <div class="s-footer__copyright">
                        <span>Wordsmith ©{{ date('Y') }}. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="go-top">
        <a class="smoothscroll" title="Back to Top" href="#top"></a>
    </div>
</footer>
