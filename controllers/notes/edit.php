<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve('Core\Database');
require base_path('Core/Validator.php');

$heading = 'Edit Note';


view('notes/edit.view.php', [
    'heading' => 'Edit Note',
    'errors' => $errors
]);