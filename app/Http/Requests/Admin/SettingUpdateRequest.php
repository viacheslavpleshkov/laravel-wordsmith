<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;

/**
 * Class SettingUpdateRequest
 * @package App\Http\Requests\Admin
 */
class SettingUpdateRequest extends AbstractRequest
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
            'paginate_site' => 'required|integer',
            'paginate_admin' => 'required|integer',
            'contactform' => 'required|integer',
            'footer_about' => 'required|string|max:4096',
        ];
    }
}
