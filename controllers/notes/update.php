<?php
use Core\Database;
use Core\App;
use Core\Validator;


$db = App::resolve('Core\Database');
$currentUserId = 1;
$note = $db->query("select * from notes where id = ?", [$_POST['note_id']])->fetchOrFail();

authorize($note['user_id'] === $currentUserId);

$maxChar = 1000;
$errors = [];


if (!Validator::textValidator($_POST['body'], 1, $maxChar)) {
    $errors['body'] = "A body of no more than {$maxChar} characters is required.";
}
if (!Validator::textValidator($_POST['subject'], 1, 30)) {
    $errors['subject'] = "A subject of no more than 30 characters is allowed";
}


if(count($errors)){
     view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
     die();
}

$db->query('update notes set body = :body, subject = :subject where id = :id', [
    'id' => $_POST['note_id'],
    'body' => $_POST['body'],
    'subject' => $_POST['subject']

]);



header('location: /notes');
die();