<?php

namespace App\Http\Requests\College;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Http\FormRequest;

class CollegeRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['name'] = 'nullable|string|min:3|max:255';
            $rules['image'] = 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg,webp';
        }
        return $rules;
    }
}
