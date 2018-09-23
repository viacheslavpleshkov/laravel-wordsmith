<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function comments(Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);
        return $request['text'];
        exit();
        Review::create([
            'text' => $request['text'],
            'status' => 1
        ]);
        return redirect()->back()->with('success-submit', __('site.success-submit'));
    }
}
