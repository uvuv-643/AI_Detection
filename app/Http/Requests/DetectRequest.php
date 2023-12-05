<?php

namespace App\Http\Requests;

use App\Models\Detection;
use App\Models\User;
use Closure;
use Illuminate\Foundation\Http\FormRequest;

class DetectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (auth()->check()) {
            /** @var User $user */
            $user = auth()->user();
            if ($user->haveCredits()) {
                return true;
            }
        }
        $userIp = $this->ip();
        if ($userIp === null) return false;
        $userDetections = Detection::query()->where('ip', $userIp);
        return $userDetections->count() < 5;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'text' => ['required', function (string $attribute, mixed $value, Closure $fail) {
                if (mb_strlen($value) > 5000) {
                    /** @var User $user */
                    $user = auth()->user();
                    if (!$user || !$user->haveCredits()) {
                        $fail("Limit of characters in your text exceeded");
                    }
                }
                if (mb_strlen($value) > 25000) {
                    $fail("Limit of characters in your text exceeded");
                }
            }]
        ];
    }

}
