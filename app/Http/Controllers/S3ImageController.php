<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class S3ImageController extends Controller
{


	/**
	 * Create view file
	 *
	 * @return void
	 */
	public function imageUpload()
	{
		return view('image-upload');
	}


	/**
	 * Manage Post Request
	 *
	 * @return void
	 */
	public function imageUploadPost(Request $request)
	{
		$this->validate($request, [
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);


		$imageName = time().'.'.$request->image->getClientOriginalExtension();
		$image = $request->file('image');
		$t = Storage::disk('s3')->put($imageName, file_get_contents($image), 'public');
		$imageName = Storage::disk('s3')->url($imageName);


		return back()
			->with('success','Image Uploaded successfully.')
			->with('path',$imageName);
	}
}