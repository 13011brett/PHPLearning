<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';


$config = require('config.php');
$db = new Database($config['database']);

$posts = $db->query("select title from posts where id = 2")->fetchall(PDO::FETCH_ASSOC);




dd($posts);

// Connect to the Database, Execute a query.
