<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;

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
        return view('admin.pages.settings');
    }
}