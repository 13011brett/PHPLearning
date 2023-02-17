<?php

use Core\Database;
use Core\App;


$db = App::resolve('Core\Database');


$notes = $db->query("select * from notes where user_id = ?", [1])->fetchAll(PDO::FETCH_ASSOC);

//dd($notes);

$heading = 'My Notes';


view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);

      
    

