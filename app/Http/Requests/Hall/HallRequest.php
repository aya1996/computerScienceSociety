<?php

namespace App\Http\Requests\Hall;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Http\FormRequest;

class HallRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'college_id' => 'required|numeric|min:1',
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['name'] = 'nullable|string|min:2|max:255';
        }
        return $rules;
    }
}
