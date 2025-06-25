<?php

use Core\Validator\BaseValidator;

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(! BaseValidator::email($_POST['email'])){
        $errors['email'] = 'Please provide a valid email address.';
    }
}

view('register/create.view.php',[
    'errors' => $errors
]);