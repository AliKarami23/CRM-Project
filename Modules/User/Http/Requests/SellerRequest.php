<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
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
            'CompanyName' => ['required'],
            'CompanyAddress' => ['required'],
            'NumberOfCustomers' => ['required'],
            'Email' => ['required'],
            'PhoneNumber' => ['required'],
            'Password' => ['required'],
        ];
    }
}
