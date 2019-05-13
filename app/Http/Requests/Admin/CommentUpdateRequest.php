<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;

/**
 * Class CommentUpdateRequest
 * @package App\Http\Requests\Admin
 */
class CommentUpdateRequest extends AbstractRequest
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
            'user_id' => 'required|integer',
            'article_id' => 'required|integer',
            'body' => 'required|string|max:4096',
            'status' => 'required|integer',
        ];
    }
}
