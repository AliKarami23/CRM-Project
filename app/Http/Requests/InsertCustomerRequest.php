<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertCustomerRequest extends FormRequest
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

            'Name' => 'required|min:2|max:50',
            'LastName' => 'required|min:2|max:50',
            'FatherName' => 'required|min:2|max:50',
            'Email' => 'required|email',
            'PhoneNumber' => 'required|numeric',
            'Country' => 'required',
            'City' => 'required',
            'Address' => 'required',
            'Gender' => 'required',
            'NationalCode' => 'required',
            'Job' => 'required',
            'Image' => 'required',
            'Education' => 'required',
            'CityEducation' => 'required',
            'Password' => 'required|min:8',
        ];
    }
}
