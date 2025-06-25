<?php

use Core\Validator\BaseValidator;
use Core\Validator\Password;

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(! BaseValidator::email($_POST['email'])){$errors['email'] = 'Please provide a valid email address.';}
    if(! BaseValidator::phoneNumber($_POST['phone_number'],11,11)){$errors['phone_number'] = "Please provide a valid phone number." ;}

    $passwordErrors = Password::validatePassword($_POST['password']);
    if(!empty($passwordErrors)){
        $errors['password'] = $passwordErrors;
    }
}

view('register/create.view.php',[
    'errors' => $errors
]);

dd($errors);