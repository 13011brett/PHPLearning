<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);
require base_path('Core/Validator.php');

$heading = 'Create Note';
$maxChar = 1000;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if(! Validator::textValidator($_POST['body'], 1, $maxChar)){
        $errors['body'] = "A body of no more than {$maxChar} characters is required.";
    }
    if(! Validator::textValidator($_POST['subject'],1,30)){
        $errors['subject'] = "A subject of no more than 30 characters is allowed";
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id, subject) VALUES(:body, :id, :subject )', [
            'body' => $_POST['body'],
            'id' => 1,
            'subject' => $_POST['subject']
        ]);
    }
}

view('notes/create.php', [
    'heading' => 'My Notes',
    'errors' => $errors
]);