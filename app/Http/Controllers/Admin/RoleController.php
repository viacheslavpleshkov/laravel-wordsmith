<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\RoleRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\RoleEditRequest;

class RoleController extends BaseController
{
	/**
	 * @var RoleRepository
	 */
	protected $role;
	/**
	 * @var SettingRepository
	 */
	protected $setting;

	/**
	 * RoleController constructor.
	 */
	public function __construct()
	{
		$this->role = new RoleRepository();
		$this->setting = new SettingRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function index()
    {
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->role->getRoleAdminAll($paginate);

        return view('admin.roles.index', compact('main'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function show($id)
    {
        $main = $this->role->getById($id);

        return view('admin.roles.show', compact('main'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function edit($id)
    {
        $main = $this->role->getById($id);

        return view('admin.roles.edit', compact('main'));
    }

	/**
	 * @param RoleEditRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function update(RoleEditRequest $request, $id)
    {
        $this->role->update($id, $request->all());

        return redirect()->route('roles.index')->with('success', __('admin.updated-success'));
    }
}
