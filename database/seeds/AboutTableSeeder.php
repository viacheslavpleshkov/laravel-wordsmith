<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new About();
        $contact->content_header = 'Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo.';
        $contact->text = '<p>
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
        $contact->footer_about = 'Fugiat quas eveniet voluptatem natus. Placeat error temporibus magnam sunt optio aliquam. Ut ut occaecati placeat at. Fuga fugit ea autem. Dignissimos voluptate repellat occaecati minima dignissimos mollitia consequatur. Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa error temporibus magnam est voluptatem.';

        $contact->save();
    }
}
