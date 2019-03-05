<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use App\Http\Requests\Site\ProfileEditRequest;
use App\Http\Requests\Site\ProfilePasswordRequest;
use App\Repositories\Site\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
	/**
	 * @var UserRepository
	 */
	protected $user;

	/**
	 * ProfileController constructor.
	 */
	public function __construct()
	{
		$this->user = new UserRepository();
	}

	/**
	 * Display a listing of the resAboProfileProfileutmeource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$main = User::find(Auth::user()->id);
		return view('site.profile.index', compact('main'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$main = User::find($id);
		return view('site.profile.edit', compact('main'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function updateEdit(ProfileEditRequest $request, $id)
	{
		User::find($id)->update($request->all());
		return redirect()->route('profile.index')->with('success', __('site.updated-success'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function password($id)
	{
		$main = User::find($id);
		return view('site.profile.password', compact('main'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function updatePassword(ProfilePasswordRequest $request, $id)
	{
		User::find($id)->update([
			'password' => Hash::make($request->password),
		]);
		return redirect()->route('profile.index')->with('success', __('site.profile-password-success'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		User::find($id)->delete();
		return redirect()->route('login')->with('success', __('site.profile-user-deleted'));
	}
}
