<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve('Core\Database');
require base_path('Core/Validator.php');

$heading = 'Create Note';
$maxChar = 1000;
$errors = [];


if (!Validator::textValidator($_POST['body'], 1, $maxChar)) {
    $errors['body'] = "A body of no more than {$maxChar} characters is required.";
}
if (!Validator::textValidator($_POST['subject'], 1, 30)) {
    $errors['subject'] = "A subject of no more than 30 characters is allowed";
}
if (!empty($errors)){
    view('notes/create.view.php', [
        'heading' => 'My Notes',
        'errors' => $errors
    ]);
    die();
}

   $db->query('INSERT INTO notes(body, user_id, subject) VALUES(:body, :id, :subject )', [
        'body' => $_POST['body'],
        'id' => 1,
        'subject' => $_POST['subject']
    ]);
    header('location:/notes');





