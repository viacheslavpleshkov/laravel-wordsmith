<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Http\Requests\Admin\UserStoreRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;
	/**
	 * @var RoleRepository
	 */
	protected $roleRepository;
	/**
	 * @var UserRepository
	 */
	protected $userRepository;

	/**
	 * UserController constructor.
	 * @param SettingRepository $settingRepository
	 * @param RoleRepository $roleRepository
	 * @param UserRepository $userRepository
	 */
	public function __construct(SettingRepository $settingRepository, RoleRepository $roleRepository, UserRepository $userRepository)
	{
		$this->settingRepository = $settingRepository;
		$this->roleRepository = $roleRepository;
		$this->userRepository = $userRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->settingRepository->getPaginateAdmin();
		$main = $this->userRepository->getUserAdminAll($paginate);

		return view('admin.users.index', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		$role = $this->roleRepository->getAll();

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
		$this->userRepository->create($attributes);

		return redirect()->route('users.index')->with('success', __('admin.created-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->userRepository->getById($id);

		return view('admin.users.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$role = $this->roleRepository->getAll();
		$main = $this->userRepository->getById($id);

		return view('admin.users.edit', compact('main', 'role'));
	}

	/**
	 * @param UserRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(UserUpdateRequest $request, $id)
	{
		$attributes = [
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'role_id' => $request->role_id
		];
		$this->userRepository->update($id, $attributes);

		return redirect()->route('users.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id)
	{
		$this->userRepository->delete($id);

		return redirect()->route('users.index')->with('success', __('admin.information-deleted'));
	}
}
