<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'description' => 'required|string|min:3',
            'message' => 'required|string|min:3',
            'values' => 'required|string|min:3',
            'vision' => 'required|string|min:3',
            'image' => 'required|nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['description'] = 'required|string|min:3';
            $rules['message'] = 'required|string|min:3';
            $rules['values'] = 'required|string|min:3';
            $rules['vision'] = 'required|string|min:3';
            $rules['image'] = 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg,webp';

        }
        return $rules;
    }
}
