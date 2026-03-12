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
        if (!is_string($value)) {
            $fail("El campo {$attribute} debe ser texto.");
            return;
        }

        if (mb_strlen($value) < 8) {
            $fail("El campo {$attribute} debe tener minimo 8 caracteres.");
            return;
        }

       /*  // Validar que contenga al menos un numero
        if (!preg_match('/\d/', $value)) {
            $fail('La contrasenha debe contener al menos un numero.');
            return;
        }

        // Validar que contenga al menos una letra mayuscula
        if (!preg_match('/[A-Z]/', $value)) {
            $fail('La contrasenha debe contener al menos una letra mayuscula.');
            return;
        }

        // Validar que contenga al menos una letra minuscula
        if (!preg_match('/[a-z]/', $value)) {
            $fail('La contrasenha debe contener al menos una letra minuscula.');
            return;
        }

        // Validar que contenga al menos un caracter especial (#, _, $, @)
        if (!preg_match('/[#_$@]/', $value)) {
            $fail('La contrasenha debe contener al menos un caracter especial (#, _, $, @).');
            return;
        } */
    }
}