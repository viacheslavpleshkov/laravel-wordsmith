<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\ProfileEditRequest;
use App\Http\Requests\Site\ProfilePasswordRequest;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
	/**
	 * @var UserRepository
	 */
	protected $userRepository;

	/**
	 * ProfileController constructor.
	 * @param UserRepository $userRepository
	 */
	public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$id = Auth::user()->id;
		$main = $this->userRepository->getById($id);

		return view('site.profile.index', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$this->userRepository->getById($id);

		return view('site.profile.edit', compact('main'));
	}

	/**
	 * @param ProfileEditRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function updateEdit(ProfileEditRequest $request, $id)
	{
		$this->userRepository->update($id, $request->all());

		return redirect()->route('profile.index')->with('success', __('site.updated-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function password($id)
	{
		$this->userRepository->getById($id);

		return view('site.profile.password', compact('main'));
	}

	/**
	 * @param ProfilePasswordRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function updatePassword(ProfilePasswordRequest $request, $id)
	{
		$attributes = ['password' => Hash::make($request->password)];
		$this->userRepository->update($id, $attributes);

		return redirect()->route('profile.index')->with('success', __('site.profile-password-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id)
	{
		$this->userRepository->delete($id);

		return redirect()->route('login')->with('success', __('site.profile-user-deleted'));
	}
}
