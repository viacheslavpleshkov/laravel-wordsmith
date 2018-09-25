<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use App\Http\Requests\Page as Request;
use App\Seo;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Page::all();
        return view('admin.pages.index', compact('main'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Page::find($id);
        return view('admin.pages.show', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Page::find($id);
        $seo = Seo::all();
        return view('admin.pages.edit', compact('main', 'seo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Page::find($id)->update($request->all());
        return redirect()->route('pages.index')->with('success', __('admin.updated-success'));
    }
}
