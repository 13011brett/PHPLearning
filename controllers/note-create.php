<?php

$config = require('config.php');
$db = new Database($config['database']);
require('Validator.php');

$heading = 'Create Note';
$maxChar = 1000;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    if(Validator::textValidator($_POST['body'], 1, $maxChar)){
        $errors['body'] = "A body of no more than {$maxChar} characters is required.";
    }
    if(Validator::textValidator($_POST['subject'],1,30)){
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

require 'views/note-create.view.php';