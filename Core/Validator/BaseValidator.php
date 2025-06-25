<?php

namespace Core\Validator;

class BaseValidator{

    // Mainly for expenses names, to be implemented in the future.
    public static function string($value, $min = 1, $max = INF){
        $value = trim($value); // Removes white space
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    // For forms/input fields
    public static function min($value, $min){
        $value = trim($value);
        return strlen($value) >= $min;
    }
    public static function max($value, $max = INF){
        $value = trim($value);
        return strlen($value) > $max;
    }

    public static function hasNoSpaces($value){
        return !preg_match('/\s/', $value);
    }

    public static function onlyAscii($value){
        return preg_match('/^[a-zA-Z0-9_.-]+$/', $value);
    }

    public static function startsWithUppercaseLetter($value){
        $value = trim($value);
        return preg_match('/^[A-Z]/', $value);
    }

    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
        // Validator::email('mxxxx@gmail.com')
    }

    public static function phoneNumber($value, $min = 1, $max = INF){
        $value = trim($value);
        // Check if it contains only digits
        if(!preg_match('/^\d+$/', $value)){return false;}
        // Checks for string length
        return strlen($value) >= $min && strlen($value) <= $max;
    }
}