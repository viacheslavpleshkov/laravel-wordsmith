<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Contactwithme;
use App\Http\Requests\Contactwithme as Request;


class ContactwithmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Contactwithme::all();
        return view('admin.contact-with-me.index', compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact-with-me.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contactwithme::create($request->all());
        return redirect()->route('contact-with-me.index')->with('success', __('admin.created-success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Contactwithme::find($id);
        return view('admin.contact-with-me.show', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Contactwithme::find($id);
        return view('admin.contact-with-me.edit', compact('main'));
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
        Contactwithme::find($id)->update($request->all());
        return redirect()->route('contact-with-me.index')->with('success', __('admin.updated-success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contactwithme::find($id)->delete();
        return redirect()->route('contact-with-me.index')->with('success', __('admin.information-deleted'));
    }
}
