<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinWords implements Rule
{
    private $minWords;

    public function __construct($minWords)
    {
        $this->minWords = $minWords;
    }

    public function passes($attribute, $value)
    {
        $wordCount = str_word_count($value);
        return $wordCount >= $this->minWords;
    }

    public function message()
    {
        return 'The :attribute must have at least ' . $this->minWords . ' words.';
    }
}
