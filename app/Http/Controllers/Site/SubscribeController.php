<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use App\Http\Requests\Site\Subscribe as SubscribeRequest;

class SubscribeController extends Controller
{
	public function subscribe(SubscribeRequest $request)
	{
		Subscribe::create([
			'email' => $request['email'],
			'status' => 1
		]);
		return redirect()->back()->with('success-submit', __('site.success-submit'));
	}
}
