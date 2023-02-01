<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    if (strlen($_POST['body']) <= 0) {
        $errors['body'] = 'A Body is Required';
    }
    if (strlen($_POST['body']) >= 1000) {
        $errors['body'] = 'Text cannot be longer than 1000 characters.';
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