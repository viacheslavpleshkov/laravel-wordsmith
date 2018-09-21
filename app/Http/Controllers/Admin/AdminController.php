<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;
use App\Seo;
use App\Http\Requests\Setting as SettingRequest;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.index');
    }

    public function settings()
    {
        $main = Seo::find(1);
        return view('admin.pages.settings', compact('main'));
    }
    public function settingsupdate(SettingRequest $request)
    {
        Seo::find(1)->update($request->all());
        return redirect()->route('admin.settings')->with('success', __('admin.updated-success'));
    }
}