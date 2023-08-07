<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [

            'name' => 'required|min:2|max:50',
            'fname' => 'required|min:2|max:50',
            'dadname' => 'required|min:2|max:50',
            'email' => 'required|email',
            'phonenumber' => 'required|numeric',
            'country' => 'required',
            'City' => 'required',
            'Address' => 'required',
            'gender' => 'required',
            'nationalcode' => 'required',
            'job' => 'required',
            'image' => 'required',
            'education' => 'required',
            'cityofeducation' => 'required',
            'password' => 'required|min:8',
        ];
    }
}
