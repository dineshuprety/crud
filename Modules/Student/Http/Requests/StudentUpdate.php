<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdate extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'fullname' => 'required|min:3|max:255',
            'address' => 'required:min:3|max:255',
            'email' => 'required',
            'phone_number' => 'required|min:10|max:10',
            'pincode' => 'required|min:6|max:6',
            'classes' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
