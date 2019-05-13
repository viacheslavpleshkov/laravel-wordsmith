<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;

/**
 * Class ArticleStoreRequest
 * @package App\Http\Requests\Admin
 */
class ArticleStoreRequest extends AbstractRequest
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
            'url' => 'required|string|unique:articles|max:255',
            'text' => 'required|string|max:4096',
            'category_id' => 'required|integer',
            'seo_id' => 'required|integer',
            'views' => 'required|integer',
            'slide' => 'required|integer',
            'status' => 'required|integer',
            'user_id' => 'integer',
        ];
    }
}
