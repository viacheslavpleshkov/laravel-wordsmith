<?php

namespace App\Http\Requests\Site;

use App\Http\Requests\AbstractRequest;

/**
 * Class ProfilePasswordRequest
 * @package App\Http\Requests\Site
 */
class ProfilePasswordRequest extends AbstractRequest
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
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
