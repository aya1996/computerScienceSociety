<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:admins',
            'password' => 'required|string|min:8|confirmed',
            'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['name'] = 'required|string|min:3';
            $rules['email'] = 'required|email|unique:admins,email,' . request()->admin;
            $rules['password'] = 'sometimes|nullable|string|min:8';
            $rules['image'] = 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg,webp';

        }
        return $rules;
    }
}
