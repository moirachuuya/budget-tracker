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
        return strlen($value) < $max;
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