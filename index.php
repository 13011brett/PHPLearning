<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';

$db = new Database();
$posts = $db->query("select title from posts where id = 2")->fetchall(PDO::FETCH_ASSOC);




dd($posts);

// Connect to the Database, Execute a query.
