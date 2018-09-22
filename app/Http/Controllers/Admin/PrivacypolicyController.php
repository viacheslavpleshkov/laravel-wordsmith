<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Privacypolicy;
use App\Http\Requests\Privacypolicy as Request;


class PrivacypolicyController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $main = Privacypolicy::find(1);
        return view('admin.privacy-policy.index', compact('main'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        Privacypolicy::find(1)->update($request->all());
        return redirect()->route('privacy-policy.index')->with('success', __('admin.updated-success'));
    }
}
