<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 50)) {
    $errors['body'] = 'A body is required';
}

if (!empty($errors)) {
    return view('notes/create.view.php', [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO note (body, userID) VALUES (:body, :userID)', [
    ':body' => $_POST['body'],
    ':userID' => 1
]);

header('location: /notes');
die();
