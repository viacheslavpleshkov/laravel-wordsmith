<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingEditRequest extends FormRequest
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
