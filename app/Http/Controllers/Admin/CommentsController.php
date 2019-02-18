<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Http\Requests\Admin\Comment as CommentRequest;
use App\User;
use App\Article;
use App\Setting;

class CommentsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$paginate = Setting::first()->paginate_admin;
		$main = Comment::paginate($paginate);
		return view('admin.comments.index', compact('main'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$users = User::all();
		$articles = Article::where('status', 1)->get();
		return view('admin.comments.create', compact('users', 'articles'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(CommentRequest $request)
	{
		Comment::create($request->all());
		return redirect()->route('comments.index')->with('success', __('admin.created-success'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$main = Comment::find($id);
		return view('admin.comments.show', compact('main'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$main = Comment::find($id);
		$users = User::all();
		$articles = Article::where('status', 1)->get();
		return view('admin.comments.edit', compact('main', 'users', 'articles'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(CommentRequest $request, $id)
	{
		Comment::find($id)->update($request->all());
		return redirect()->route('comments.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Comment::find($id)->delete();
		return redirect()->route('comments.index')->with('success', __('admin.information-deleted'));
	}
}
