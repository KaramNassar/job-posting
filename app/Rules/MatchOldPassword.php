<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;

use function redirect;

class MatchOldPassword implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
	    if (! Hash::check($value, auth()->user()->password)) {
		    $fail('The :attribute does not match with old password.');
	    }
    }
}
