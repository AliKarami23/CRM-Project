<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'FullName' => ['required'],
            'FatherName' => ['required'],
            'Email' => ['required'],
            'PhoneNumber' => ['required'],
            'Country' => ['required'],
            'City' => ['required'],
            'Address' => ['required'],
            'Gender' => ['required'],
            'NationalCode' => ['required'],
            'Job' => ['required'],
            'Image' => ['required'],
            'Education' => ['required'],
            'CityEducation' => ['required'],
            'Password' => ['required'],
        ];
    }
}
