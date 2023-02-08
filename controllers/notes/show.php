<?php

$config = require(base_path('config.php'));

$db = new Database($config['database']);


$note = $db->query("select * from notes where id = ?", [$_GET['id']])->fetchOrFail(PDO::FETCH_ASSOC);


$currentUserId = 1;


authorize($note['user_id'] === $currentUserId);
//dd($notes);


view('notes/show.view.php', [
    'heading' => htmlspecialchars($note['subject']),
    'note' => $note
]);

      
    

