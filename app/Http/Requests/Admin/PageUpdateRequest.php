<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;

/**
 * Class PageUpdateRequest
 * @package App\Http\Requests\Admin
 */
class PageUpdateRequest extends AbstractRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => 'required|string|max:255',
			'url' => 'required|string|unique:pages|max:255',
			'content_header' => 'nullable|string|max:4096',
			'text' => 'nullable|string|max:4096',
			'seo_id' => 'required|integer',
		];
	}
}
