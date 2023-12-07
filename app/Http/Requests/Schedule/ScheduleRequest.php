<?php

namespace App\Http\Requests\Schedule;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
            'day' => 'required|string',
            'college_id' => 'required|numeric|min:1',
            'hall_id' => 'required|numeric|min:1',
            'course_id' => 'required|numeric|min:1',
            'time_from' => 'date_format:H:i',
            'time_to' => 'date_format:H:i|after:time_from',
        ];
        return $rules;
    }
}
