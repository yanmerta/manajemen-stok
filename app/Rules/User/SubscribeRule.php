<?php

namespace App\Rules\User;

use App\Models\SubscribeModel;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class SubscribeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $email = $value;
        $checkExist = SubscribeModel::where('sbc_email', $email)->count();
        if($checkExist > 0) {
            $fail('Email address is already registered, please try another email address');
        }
    }
}
