<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckboxesBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }

    public function passes($attribute, $value)
    {
        $selectedCount = count($value);
        return $selectedCount >= 1 && $selectedCount <= 3;
    }

    public function message()
    {
        return 'Debes seleccionar entre 1 y 3 opciones.';
    }


}
