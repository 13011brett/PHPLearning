<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';


$config = require('config.php');
$db = new Database($config['database']);
$id = $_GET['id'];
$query = "select title from posts where id = ?";

$posts = $db->query($query, [$id])->fetch(PDO::FETCH_ASSOC);




dd($posts);

// Connect to the Database, Execute a query.
