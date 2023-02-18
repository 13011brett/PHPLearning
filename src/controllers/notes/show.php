<?php

use Core\Database;
use Core\App;

$db = App::resolve('Core\Database');
$currentUserId = 1;

$note = $db->query("select * from notes where id = ?", [$_GET['id']])->fetchOrFail();
authorize($note['user_id'] === $currentUserId);


view('notes/show.view.php', [
    'heading' => htmlspecialchars($note['subject']),
    'note' => $note
]);


      
    

