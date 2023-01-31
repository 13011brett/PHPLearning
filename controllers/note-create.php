<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';

if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['body'] != null && $_POST['subject'] != null ){
    $db->query('INSERT INTO notes(body, user_id, subject) VALUES(:body, :id, :subject )', [
        'body' => $_POST['body'],
        'id' => 1,
        'subject' => $_POST['subject']
]);
}

require 'views/note-create.view.php';