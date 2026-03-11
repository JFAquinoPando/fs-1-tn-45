<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ContrasenhaValida implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Validar longitud mínima de 8 caracteres
        if (strlen($value) < 8) {
            $fail('La contraseña debe tener mínimo 8 caracteres.');
            return;
        }

       /*  // Validar que contenga al menos un número
        if (!preg_match('/\d/', $value)) {
            $fail('La contraseña debe contener al menos un número.');
            return;
        }

        // Validar que contenga al menos una letra mayúscula
        if (!preg_match('/[A-Z]/', $value)) {
            $fail('La contraseña debe contener al menos una letra mayúscula.');
            return;
        }

        // Validar que contenga al menos una letra minúscula
        if (!preg_match('/[a-z]/', $value)) {
            $fail('La contraseña debe contener al menos una letra minúscula.');
            return;
        }

        // Validar que contenga al menos un carácter especial (#, _, $, @)
        if (!preg_match('/[#_$@]/', $value)) {
            $fail('La contraseña debe contener al menos un carácter especial (#, _, $, @).');
            return;
        } */
    }
}
