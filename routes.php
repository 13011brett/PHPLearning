<?php
//return [
//    '/' => 'controllers/index.php',
//    '/myMission' => 'controllers/myMission.php',
//    '/notes' => 'controllers/notes/index.php',
//    '/note' => 'controllers/notes/show.php',
//    '/notes/create' => 'controllers/notes/create.php'
//
//];

$router->get('/', 'controllers/index.php');
$router->get('/myMission', 'controllers/myMission.php');
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');

