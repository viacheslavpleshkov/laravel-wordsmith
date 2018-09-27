<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App;
use App\Setting;
use App\Page;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailShipped;
use App\Http\Requests\Contact as ContactRequest;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        $main = Page::find(4);
        $setting = Setting::find(1);
        return view('site.pages.contact', compact('main', 'setting'));
    }

    /**
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(ContactRequest $request)
    {
        Mail::send(new MailShipped($request));
        return redirect()->route('site.contact')->with('success', __('site.contact-success'));
    }
}
