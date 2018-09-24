<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use App\Http\Requests\About as Request;


class AboutController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $main = About::find(1);
        return view('admin.about.index', compact('main'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        About::find(1)->update($request->all());
        return redirect()->route('about.index')->with('success', __('admin.updated-success'));
    }
}
