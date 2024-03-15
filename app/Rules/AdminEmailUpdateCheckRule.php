<?php

namespace App\Rules;

use App\Models\AdminModel;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AdminEmailUpdateCheckRule implements ValidationRule
{
    protected $admin_id;
    function __construct($admin_id)
    {
        $this->admin_id = $admin_id;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $adm_email_now = AdminModel::select('adm_email')->where('admin_id', $this->admin_id)->value('adm_email');
        $adm_email_update = $value;

        if($adm_email_now != $adm_email_update) {
            $check = AdminModel
                ::where([
                    'adm_email' => $adm_email_update
                ])
                ->whereNotIn('admin_id', [$this->admin_id])
                ->count();

            if($check > 0) {
                $fail('Email is not available');
            }
        }
    }
}
