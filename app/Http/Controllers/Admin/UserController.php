<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\UserEditRequest;
use App\Http\Requests\Admin\UserStoreRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
	/**
	 * @var SettingRepository
	 */
	protected $setting;
	/**
	 * @var RoleRepository
	 */
	protected $role;
	/**
	 * @var UserRepository
	 */
	protected $user;

	/**
	 * UserController constructor.
	 */
	public function __construct()
	{
		$this->setting = new SettingRepository();
		$this->role = new RoleRepository();
		$this->user = new UserRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->user->getUserAdminAll($paginate);

		return view('admin.users.index', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		$role = $this->role->getAll();

		return view('admin.users.create', compact('role'));
	}

	/**
	 * @param UserRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(UserStoreRequest $request)
	{
		$attributes = [
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'role_id' => $request->role_id
		];
		$this->user->create($attributes);

		return redirect()->route('users.index')->with('success', __('admin.created-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->user->getById($id);

		return view('admin.users.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$role = Role::all();
		$main = User::find($id);
		return view('admin.users.edit', compact('main', 'role'));
	}

	/**
	 * @param UserRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(UserEditRequest $request, $id)
	{
		$attributes = [
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'role_id' => $request->role_id
		];
		$this->user->update($id, $attributes);

		return redirect()->route('users.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id)
	{
		$this->user->delete($id);

		return redirect()->route('users.index')->with('success', __('admin.information-deleted'));
	}
}
