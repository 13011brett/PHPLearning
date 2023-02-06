<?php

$config = require('config.php');
$db = new Database($config['database']);


$notes = $db->query("select * from notes where user_id = ?", [1])->fetchAll(PDO::FETCH_ASSOC);

//dd($notes);

$heading = 'My Notes';


require 'views/notes/index.view.php';

      
    

