<?php

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value) 
    {
        // Validator::email('joe@example.com')

        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}

/*

Simple function, requires nothing from outside of itself and its arguments passed to complete.
i.e. nothing like $this->sdlfkjdf

Can make those into static functions, call them directly without instantiating them first.
public static function name() {}

*/