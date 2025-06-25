<?php

use Core\Validator\BaseValidator;
use Core\Validator\Password;
use Core\Validator\Username;

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    function names($value, &$errors){
        if(! BaseValidator::startsWithUppercaseLetter($_POST[$value])){$errors[$value][] = 'must start with an uppercase letter';}
        if(! BaseValidator::string($_POST[$value], 2, 20)){$errors[$value][] = 'must be a valid.';}
    }

    names('first_name', $errors);
    names('last_name', $errors);
    names('middle_name', $errors);

    if(! BaseValidator::email($_POST['email'])){$errors['email'] = 'Please provide a valid email address.';}
    if(! BaseValidator::phoneNumber($_POST['phone_number'],11,11)){$errors['phone_number'] = "Please provide a valid phone number." ;}

    $passwordErrors = Password::validatePassword($_POST['password']);
    if(!empty($passwordErrors)){
        $errors['password'] = $passwordErrors;
    }

    $usernameErrors = Username::validateUsername($_POST['username']);
    if(!empty($usernameErrors)){
        $errors['username'] = $usernameErrors;
    }

    // Figure out logic next time
    // if($_POST['password'] === $_POST['confirm_password']){
    //     header('location: /');
    //     exit;
    // }
}

view('register/create.view.php',[
    'errors' => $errors
]);