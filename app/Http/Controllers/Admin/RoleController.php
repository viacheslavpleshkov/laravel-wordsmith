<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Setting;
use App\Http\Requests\Admin\Role as RoleRequest;

class RoleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$paginate = Setting::first()->paginate_admin;
		$main = Role::desc()->paginate($paginate);
        return view('admin.roles.index', compact('main'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Role::find($id);
        return view('admin.roles.show', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Role::find($id);
        return view('admin.roles.edit', compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        Role::find($id)->update($request->all());
        return redirect()->route('roles.index')->with('success', __('admin.updated-success'));
    }
}
