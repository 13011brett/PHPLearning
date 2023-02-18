<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve('Core\Database');
require base_path('Core/Validator.php');

$heading = 'Create Note';


view('notes/create.view.php', [
    'heading' => 'My Notes',
    'errors' => $errors
]);