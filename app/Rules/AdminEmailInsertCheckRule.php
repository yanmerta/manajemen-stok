<?php

namespace App\Rules;

use App\Models\AdminModel;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AdminEmailInsertCheckRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $adm_email = $value;
        $check = AdminModel::where('adm_email', $adm_email)->count();
        if($check > 0) {
            $fail('Email is not available');
        }
    }
}
