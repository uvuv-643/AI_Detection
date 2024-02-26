<?php

namespace App\Http\Requests;

use App\Models\Detection;
use App\Models\User;
use Closure;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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
            if ($user->hasCredits()) {
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
                    if (!$user || !$user->hasCredits()) {
                        $fail("Limit of characters in your text exceeded");
                    }
                }
                if (mb_strlen($value) > 25000) {
                    $fail("Limit of characters in your text exceeded");
                }
            }]
        ];
    }

    public function failedAuthorization()
    {
        throw new HttpResponseException(
            redirect()->route('home')->withErrors(['To continue using the service and remove the 5000 character limit, you need to purchase one of the <a href="' . route('subscriptions') . '">possible plans</a>'])
        );
    }

}
