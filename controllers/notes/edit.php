<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve('Core\Database');
require base_path('Core/Validator.php');

$db = App::resolve('Core\Database');
$currentUserId = 1;

$note = $db->query("select * from notes where id = ?", [$_GET['id']])->fetchOrFail();
authorize($note['user_id'] === $currentUserId);


view('notes/edit.view.php', [
    'heading' => 'Edit Note',
    'note' => $note
]);