<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\Profileedit as RequestEdit;
use App\Http\Requests\Profilepassword as RequestPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resAboProfileProfileutmeource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = User::find(Auth::user()->id);
        return view('admin.profile.index', compact('main'));
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
        return view('admin.profile.edit', compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function updateedit(RequestEdit $request, $id)
    {
        User::find($id)->update($request->all());
        return redirect()->route('profile.index')->with('success', __('admin.updated-success'));
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
        return view('admin.profile.password', compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function updatepassword(RequestPassword $request, $id)
    {
        if ($request->password === $request->confirmpassword) {
            User::find($id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('profile.index')->with('success', __('admin.profile-password-success'));
        } else {
            return back()->with('errors', __('admin.profile-password-error'));
        }
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
        return redirect()->route('login')->with('success', __('admin.profile-user-deleted'));
    }
}
