<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class SendMessage extends FormRequest
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
        $rules = [
            'name' => 'required|string|min:2',
            'msg' => 'required|string|min:2',
            'phone' => 'required|numeric',
            'email' => 'required|email',
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['name'] = 'required|string|min:2';
            $rules['msg'] = 'required|string|min:2';
            $rules['phone'] = 'required|numeric';
            $rules['email'] = 'required|email';
        }
        return $rules;
    }
}
