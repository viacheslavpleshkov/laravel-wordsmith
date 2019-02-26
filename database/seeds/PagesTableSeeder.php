<?php

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new Page();
        $home->title = 'Home';
        $home->url = '/';
        $home->seo_id = 1;
        $home->save();

        $blog = new Page();
        $blog->title = 'Blog';
        $blog->url = '/blog';
        $blog->content_header = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim.';
        $blog->seo_id = 2;
        $blog->save();

        $about = new Page();
        $about->title = 'About';
        $about->url = '/about';
        $about->content_header = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim.';
        $about->text = '<p>
                <img src="images/thumbs/about/about-1000.jpg" 
                     srcset="images/thumbs/about/about-2000.jpg 2000w, 
                             images/thumbs/about/about-1000.jpg 1000w, 
                             images/thumbs/about/about-500.jpg 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>

                <h2>This Is Our Story</h2>

                <p>
                Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti 
                dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique 
                sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis 
                
                <p>
                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor 
                sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim 
                mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco. Lorem 
                ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat aute.
                </p>

                <hr>

                <div class="row block-1-2 block-tab-full">
                    <div class="col-block">
                        <h4 class="quarter-top-margin">Who We Are.</h4>
                        <p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>
                    </div>

                    <div class="col-block">
                        <h4 class="quarter-top-margin">Our Mission.</h4>
                        <p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>
                    </div>

                    <div class="col-block">
                        <h4 class="quarter-top-margin">Our Vision.</h4>
                        <p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>
                    </div>

                    <div class="col-block">
                        <h4 class="quarter-top-margin">Our Core Values.</h4>
                        <p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>
                    </div>

                </div>';
        $about->seo_id = 3;
        $about->save();

        $contact = new Page();
        $contact->title = 'Contact';
        $contact->url = '/contact';
        $contact->content_header = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim.';
        $contact->text = '<p>
                <img src="images/thumbs/contact/contact-1000.jpg" 
                     srcset="images/thumbs/contact/contact-2000.jpg 2000w, 
                             images/thumbs/contact/contact-1000.jpg 1000w, 
                             images/thumbs/contact/contact-500.jpg 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>
                <h2>Say Hello</h2>
                <p>
                Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti 
                dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique 
                sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis 
                <p>
                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor 
                sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim 
                mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco. Lorem 
                ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat aute.
                </p>
                <div id="map-wrap">
                    <div id="map-container"></div>
                    <div id="map-zoom-in"></div>
                    <div id="map-zoom-out"></div>
                </div> 
                <div class="row">
                    <div class="col-six tab-full">
                        <h4>Where to Find Us</h4>
                        <p>
                        1600 Amphitheatre Parkway<br>
                        Mountain View, CA<br>
                        94043 US
                        </p>
                    </div>
                    <div class="col-six tab-full">
                        <h4>Contact Info</h4>
                        <p>sayhello@wordsmith.com<br>
                        info@wordsmith.com <br>
                        Phone: (+1) 123 456
                        </p>
                   </div>';
        $contact->seo_id = 4;
        $contact->save();

        $privacypolicy = new Page();
        $privacypolicy->url = '/privacypolicy';
        $privacypolicy->title = 'Privacy policy';
        $privacypolicy->content_header = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim.';
        $privacypolicy->text = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim. Duis in arcu id magna rutrum mattis. Fusce vulputate nisl eget nibh laoreet feugiat. Fusce posuere velit vel magna eleifend, ac sollicitudin leo laoreet. Fusce vel ante vitae dolor sodales dapibus ut vel dolor. Donec ac sagittis nisl, quis posuere justo. Donec cursus dolor efficitur massa vulputate laoreet. Suspendisse quis justo et metus pretium scelerisque. Etiam varius, magna quis scelerisque molestie, ipsum risus tempor mi, quis lacinia odio lectus quis est. Pellentesque neque neque, pellentesque sit amet lectus ac, sollicitudin lobortis purus. Vestibulum convallis est orci, et volutpat nunc varius vel. Maecenas vel sagittis massa. Proin egestas tellus vitae ante aliquam faucibus eget nec neque. Vivamus vitae nisi eu tellus tristique gravida sit amet at ligula. Vestibulum eu commodo nunc. Nam eget lectus a turpis iaculis accumsan. Cras at est quis mi semper fermentum id ac lectus. Nunc ut sapien semper diam gravida efficitur. In volutpat tortor ipsum, porta faucibus dolor lacinia eu. Donec tincidunt, nulla et rhoncus dictum, quam mauris fermentum dolor, nec malesuada risus tellus vel odio. Suspendisse luctus tincidunt risus, vitae consectetur neque venenatis eu. Fusce sed egestas turpis. Vivamus luctus nulla eget pellentesque maximus. Mauris tincidunt tellus ut sapien consectetur, vehicula cursus ex fermentum. Sed eu venenatis lectus, non mollis ex. Aliquam gravida vel ante sit amet maximus. Donec ultrices velit quis enim venenatis suscipit. Sed ullamcorper, ante eget congue iaculis, libero ligula dignissim sem, ac commodo mauris erat a nunc. In sodales nibh vel purus facilisis egestas. Nulla enim massa, porta pellentesque nisl non, scelerisque eleifend ante. Mauris tortor lectus, blandit malesuada tempor commodo, sagittis ac justo. Pellentesque convallis sagittis pretium. Ut suscipit egestas mauris vel placerat. Ut pellentesque molestie volutpat. Etiam pretium semper ligula non mollis. Quisque faucibus mi dolor, ut euismod urna elementum id. Curabitur vel eros non dui pharetra viverra at nec tellus. Donec convallis commodo tortor, vel pharetra tellus facilisis ac. Nulla convallis ultrices nisi at scelerisque. Cras pellentesque enim et erat placerat vehicula. Morbi libero eros, pretium id arcu sit amet, dictum laoreet sapien. Proin tempus libero sit amet pellentesque hendrerit. In fermentum ligula arcu, ac tempor elit sodales ac. Nullam malesuada purus vitae sapien elementum, vulputate ultrices ipsum laoreet. Integer lacinia augue leo, id consequat nibh cursus ut. Aenean vel cursus ipsum. Nam quis mattis eros.</p>';
        $privacypolicy->seo_id = 5;
        $privacypolicy->save();

        $search = new Page();
        $search->url = '/search';
        $search->title = 'Search';
        $search->content_header = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim.';
        $search->text = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim. Duis in arcu id magna rutrum mattis. Fusce vulputate nisl eget nibh laoreet feugiat. Fusce posuere velit vel magna eleifend, ac sollicitudin leo laoreet. Fusce vel ante vitae dolor sodales dapibus ut vel dolor. Donec ac sagittis nisl, quis posuere justo. Donec cursus dolor efficitur massa vulputate laoreet. Suspendisse quis justo et metus pretium scelerisque. Etiam varius, magna quis scelerisque molestie, ipsum risus tempor mi, quis lacinia odio lectus quis est. Pellentesque neque neque, pellentesque sit amet lectus ac, sollicitudin lobortis purus. Vestibulum convallis est orci, et volutpat nunc varius vel. Maecenas vel sagittis massa. Proin egestas tellus vitae ante aliquam faucibus eget nec neque. Vivamus vitae nisi eu tellus tristique gravida sit amet at ligula. Vestibulum eu commodo nunc. Nam eget lectus a turpis iaculis accumsan. Cras at est quis mi semper fermentum id ac lectus. Nunc ut sapien semper diam gravida efficitur. In volutpat tortor ipsum, porta faucibus dolor lacinia eu. Donec tincidunt, nulla et rhoncus dictum, quam mauris fermentum dolor, nec malesuada risus tellus vel odio. Suspendisse luctus tincidunt risus, vitae consectetur neque venenatis eu. Fusce sed egestas turpis. Vivamus luctus nulla eget pellentesque maximus. Mauris tincidunt tellus ut sapien consectetur, vehicula cursus ex fermentum. Sed eu venenatis lectus, non mollis ex. Aliquam gravida vel ante sit amet maximus. Donec ultrices velit quis enim venenatis suscipit. Sed ullamcorper, ante eget congue iaculis, libero ligula dignissim sem, ac commodo mauris erat a nunc. In sodales nibh vel purus facilisis egestas. Nulla enim massa, porta pellentesque nisl non, scelerisque eleifend ante. Mauris tortor lectus, blandit malesuada tempor commodo, sagittis ac justo. Pellentesque convallis sagittis pretium. Ut suscipit egestas mauris vel placerat. Ut pellentesque molestie volutpat. Etiam pretium semper ligula non mollis. Quisque faucibus mi dolor, ut euismod urna elementum id. Curabitur vel eros non dui pharetra viverra at nec tellus. Donec convallis commodo tortor, vel pharetra tellus facilisis ac. Nulla convallis ultrices nisi at scelerisque. Cras pellentesque enim et erat placerat vehicula. Morbi libero eros, pretium id arcu sit amet, dictum laoreet sapien. Proin tempus libero sit amet pellentesque hendrerit. In fermentum ligula arcu, ac tempor elit sodales ac. Nullam malesuada purus vitae sapien elementum, vulputate ultrices ipsum laoreet. Integer lacinia augue leo, id consequat nibh cursus ut. Aenean vel cursus ipsum. Nam quis mattis eros.</p>';
        $search->seo_id = 8;
        $search->save();
    }
}
