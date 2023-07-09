<?php
use Core\Validator;


$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

    $errors['email'] = 'Please provide a valid email address.';
}

if(!Validator::textValidator($password, 7, 255)){

    $errors['password'] = "Please provide a password longer than 8 characters & shorter than 255.";
}

if(!empty($errors)){
    return view('registration/create.view.php',[
        'errors' => $errors,
        'heading' => 'Create User',
    ]
    );
}