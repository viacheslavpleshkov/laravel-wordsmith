<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->content_header = 'Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo.';
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
        $contact->seo_id = 2;;
        $contact->save();
    }
}
