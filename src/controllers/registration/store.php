<?php
use Core\Validator;
use Core\App;
use Core\Database;

$name = $_POST['name'];
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

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email,
])->fetch();

if($user){
    $errors['user'] = 'A user with that email already exists.';

} else{
    $db->query('INSERT INTO users(name, email, password) VALUES(:name, :email, :password)', [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    
    exit();
}
