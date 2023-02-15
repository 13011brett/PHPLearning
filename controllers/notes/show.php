<?php

use Core\Database;

$config = require(base_path('config.php'));

$db = new Database($config['database']);
$currentUserId = 1;

$note = $db->query("select * from notes where id = ?", [$_GET['id']])->fetchOrFail();
authorize($note['user_id'] === $currentUserId);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db->query('delete from notes where id = ?', [$_GET['id']]);
    header('location:/notes');

    exit();


} else {


    //dd($notes);


    view('notes/show.view.php', [
        'heading' => htmlspecialchars($note['subject']),
        'note' => $note
    ]);
}

      
    

