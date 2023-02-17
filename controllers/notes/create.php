<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);
require base_path('Core/Validator.php');

$heading = 'Create Note';


view('notes/create.php', [
    'heading' => 'My Notes',
    'errors' => $errors
]);