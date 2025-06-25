<?php

namespace Core\Validator;
use Core\Validator\BaseValidator;

class Password{
    public static function hasLowercase($value){
        return preg_match('/[a-z]/', $value);
    }

    public static function hasUppercase($value){
        return preg_match('/[A-Z]/', $value);
    }

    public static function hasNumber($value){
        return preg_match('/[0-9]/', $value);
    }

    public static function hasSpecialChar($value){
        return preg_match('/[^a-zA-Z0-9]/', $value);
    }

    public static function validatePassword($password){
        $errors = [];
            // Password functions:
            if(! BaseValidator::min($password, 8)){ $errors['password'][] = "Please provide a password of at least 8 characters.";}
            if(! BaseValidator::max($password, 30)){ $errors['password'][] = "Password must not exceed 30 characters.";}
            if(! Password::hasLowerCase($password)){ $errors['password'][] = "Password must include a lowercase letter.";}
            if(! Password::hasUpperCase($password)){ $errors['password'][] = "Password must include an uppercase letter.";}
            if(! Password::hasNumber($password)){ $errors['password'][] = "Password must contain a number.";}
            if(! Password::hasSpecialChar($password)){ $errors['password'][] = "Password must contain at least one special character." ;}
            if(! BaseValidator::hasNoSpaces($password)){$errors['password'][] = "Password must not contain spaces.";}
            if(! BaseValidator::onlyAscii($password)){$errors['password'][] = "Password can only contain letters, numbers, and special characters";}

        return $errors['password'] ?? [];
        }
}