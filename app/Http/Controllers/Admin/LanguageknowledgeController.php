<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Languageknowledge;
use App\Http\Requests\Languageknowledge as Request;

class LanguageknowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Languageknowledge::all();
        return view('admin.knowledge-of-languages.index', compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.knowledge-of-languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Languageknowledge::create($request->all());
        return redirect()->route('knowledge-of-languages.index')->with('success', __('admin.created-success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Languageknowledge::find($id);
        return view('admin.knowledge-of-languages.show', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Languageknowledge::find($id);
        return view('admin.knowledge-of-languages.edit', compact('main'));
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
        Languageknowledge::find($id)->update($request->all());
        return redirect()->route('knowledge-of-languages.index')->with('success', __('admin.updated-success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Languageknowledge::find($id)->delete();
        return redirect()->route('knowledge-of-languages.index')->with('success', __('admin.information-deleted'));
    }
}
