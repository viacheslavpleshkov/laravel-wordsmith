<?php

namespace App\Http\Requests\Site;

use App\Http\Requests\AbstractRequest;
use TimeHunter\LaravelGoogleReCaptchaV3\Validations\GoogleReCaptchaV3ValidationRule;

/**
 * Class ContactRequest
 * @package App\Http\Requests\Site
 */
class ContactRequest extends AbstractRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'website' => 'required|string|max:255',
            'message' => 'required|string|max:4096',
            'g-recaptcha-response' => [new GoogleReCaptchaV3ValidationRule('contact')]
        ];
    }
}
