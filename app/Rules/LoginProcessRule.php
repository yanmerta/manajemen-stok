<?php

namespace App\Rules;

use App\Models\AdminModel;
use App\Models\LanguageModel;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginProcessRule implements ValidationRule
{
    protected $email;

    function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Run the validation rule.
     *
     * @param \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $email = $this->email;
        $password_input = $value;
        $status = TRUE;

        $check_email = AdminModel
            ::where([
                'adm_email' => $email,
                'adm_active_status' => 'yes'
            ])
            ->count();

        if ($check_email == 0) {
            $status = FALSE;
        } else {
            $password_db = AdminModel
                ::where([
                    'adm_email' => $email,
                    'adm_active_status' => 'yes'
                ])
                ->value('adm_password');

            if (!Hash::check($password_input, $password_db)) {
                $status = FALSE;
            }
        }

        if ($status) {
            $admin = AdminModel::where('adm_email', $email)->first();
            $language_id = LanguageModel::where('lng_active_status', 'yes')->value('language_id');
            $session = [
                'login' => TRUE,
                'admin' => $admin,
                'data' => [
                    'language_id' => $language_id
                ]
            ];

            Session::put($session);
        }

        if (!$status) {
            $fail('Email or Password is wrong');
        }
    }
}
