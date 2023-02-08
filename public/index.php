<?php
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';
//require base_path('Database.php');
//require base_path('Response.php');

spl_autoload_register(function ($class){
    require base_path("Core/" . $class . '.php');
});
require base_path('Core/router.php');




//$id = $_GET['id'];
//$query = "select title from posts where id = ?";
//
//$posts = $db->query($query, [$id])->fetch(PDO::FETCH_ASSOC);





// Connect to the Database, Execute a query.
