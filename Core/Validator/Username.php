<?php

namespace Core\Validator;
use Core\Validator\BaseValidator;

class Username {

    public static function startsWithLetter($value){
        return preg_match('/^[a-zA-Z]/', $value);
    }

    public static function lettersNumbersUnderscoresOnly($value){
        return preg_match('/^[a-zA-Z0-9_]+$/', $value);
    }

    public static function validateUsername($username){
        $errors = [];
            if(! BaseValidator::min($username, 8)){$errors['username'][] = "Username must consist of at least 8 characters.";}
            if(! BaseValidator::max($username, 30)){$errors['username'][] = "Username must not exceed 30 characters.";}
            if(! Username::startsWithLetter($username)){$errors['username'][] = "Username must start with a letter.";}
            if(! Username::lettersNumbersUnderscoresOnly($username)){$errors['username'][] = "Only letters, numbers, and underscores (_) are allowed";}
            if(! BaseValidator::hasNoSpaces($username)){$errors['username'][] = "Username must not contain spaces.";}

        return $errors['username'] ?? [];
    }
}