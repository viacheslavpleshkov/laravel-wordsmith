<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        Subscribe::create([
            'email' => $request['email'],
            'status' => 1
        ]);
        return redirect()->back()->with('success-submit', __('site.success-submit'));
    }
}
