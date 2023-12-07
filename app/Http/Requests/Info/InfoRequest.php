<?php

namespace App\Http\Requests\Info;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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

    public function rules()
    {
        $rules = [
            'address' => 'required|string|min:2|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'youtube' => 'required|url',
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['address'] = 'required|string|min:2|max:255';
            $rules['email'] = 'required|email';
            $rules['phone'] = 'required|numeric';
            $rules['facebook'] = 'required|url';
            $rules['twitter'] = 'required|url';
            $rules['youtube'] = 'required|url';
        }
        return $rules;
    }
}
