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
        return view('admin.home.index');
    }
}