<?php

use Core\Database;
use Core\App;


$db = App::resolve('Core\Database');
$currentUserId = 1;

$note = $db->query("select * from notes where id = ?", [$_GET['id']])->fetchOrFail();
authorize($note['user_id'] === $currentUserId);


$db->query('delete from notes where id = ?', [$_POST['id']]);
header('location:/notes');

exit();

      
    

