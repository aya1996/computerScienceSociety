<?php

namespace App\Http\Requests\Level;

use Illuminate\Foundation\Http\FormRequest;

class LevelRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'building_id' => 'required|numeric|min:1',
          
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['name'] = 'nullable|string|min:2|max:255';
            $rules['building_id'] = 'nullable|numeric|min:1';
        }
        return $rules;
           
    }
}
