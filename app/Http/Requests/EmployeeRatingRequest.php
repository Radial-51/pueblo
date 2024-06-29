<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRatingRequest extends FormRequest
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
			'service_employee_id' => 'required',
			'counter_employee_id' => 'required',
			'customer_id' => 'required',
			'service_rating' => 'required',
			'counter_rating' => 'required',
			'service_feedback' => 'string',
			'counter_feedback' => 'string',
        ];
    }
}
