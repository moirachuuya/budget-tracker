<?php

namespace Core\Validator;

class BaseValidator{
    public static function string($value, $min = 1, $max = INF){
        $value = trim($value); // Removes white space
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
        // Validator::email('moirachelseyburbos@gmail.com')
    }
}