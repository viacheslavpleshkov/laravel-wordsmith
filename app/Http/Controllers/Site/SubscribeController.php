<?php

namespace App\Http\Controllers\Site;

use App\Repositories\SubscribeRepository;
use App\Http\Requests\Site\SubscribeRequest;
use Illuminate\Support\Facades\Log;

/**
 * Class SubscribeController
 * @package App\Http\Controllers\Site
 */
class SubscribeController extends BaseController
{
	/**
	 * @var SubscribeRepository
	 */
	private $subscribeRepository;

	/**
	 * SubscribeController constructor.
	 * @param SubscribeRepository $subscribeRepository
	 */
	public function __construct(SubscribeRepository $subscribeRepository)
	{
		$this->subscribeRepository = $subscribeRepository;
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
		$this->subscribeRepository->create($attributes);
        Log::info('site create subscribe with params ', $request->all());

        return redirect()->back()->with('success-submit', __('site.success-submit'));
	}
}
