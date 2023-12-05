<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
        $allowedAgeDate = Carbon::now()->subYears(18)->format('Y-m-d');
        return [
            'email' => ['required', 'email'],
            'first_name' => ['nullable'],
            'last_name' => ['nullable'],
            'gender' => ['nullable'],
            'phone' => ['nullable'],
            'password' => ['nullable', 'confirmed', 'min:8'],
            'birth_date' => ['required',  'date', "before:$allowedAgeDate"],
        ];
    }
}
