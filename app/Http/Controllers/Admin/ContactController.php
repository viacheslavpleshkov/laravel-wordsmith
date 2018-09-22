<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Contact;
use App\Http\Requests\Contact as Request;


class ContactController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $main = Contact::find(1);
        return view('admin.contact.index', compact('main'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        Contact::find(1)->update($request->all());
        return redirect()->route('contact.index')->with('success', __('admin.updated-success'));
    }
}
