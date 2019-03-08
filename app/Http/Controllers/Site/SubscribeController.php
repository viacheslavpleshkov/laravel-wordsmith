<?php

namespace App\Http\Controllers\Site;

use App\Repositories\SubscribeRepository;
use App\Http\Requests\Site\SubscribeRequest;

class SubscribeController extends BaseController
{
	/**
	 * @var SubscribeRepository
	 */
	private $subscribe;

	/**
	 * SubscribeController constructor.
	 */
	public function __construct()
	{
		$this->subscribe = new SubscribeRepository();
	}

	/**
	 * @param SubscribeRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function subscribe(SubscribeRequest $request)
	{
		$attributes = [
			'email' => $request['email'],
			'status' => 1
		];
		$this->subscribe->create($attributes);
		return redirect()->back()->with('success-submit', __('site.success-submit'));
	}
}
