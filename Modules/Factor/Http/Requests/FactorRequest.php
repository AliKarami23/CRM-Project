<?php

namespace Modules\Factor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactorRequest extends FormRequest
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
            'user_id' => 'required',
            'factor_name' => 'required',
            'Description' => 'required',
            'factor_date' => 'required',
            'factor_cost' => 'required',
            'factor_number' => 'required',
            'order_id' => 'required',
        ];
    }
}
