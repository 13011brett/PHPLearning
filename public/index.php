<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';
//require base_path('Database.php');
//require base_path('Response.php');

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

require base_path('bootstrap.php');

$router = new \Core\Router();

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

//routeToController($uri, $routes);




//$id = $_GET['id'];
//$query = "select title from posts where id = ?";
//
//$posts = $db->query($query, [$id])->fetch(PDO::FETCH_ASSOC);


// Connect to the Database, Execute a query.
