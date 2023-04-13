<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('SELECT * FROM note WHERE noteID = :id', [
    ':id' => $_POST['noteID']
])->findOrFail();

authorize($note['userID'] === $currentUserId);

$db->query('delete from note where noteID = :id', [
    'id' => $_POST['noteID']
]);

header('location: /notes');
exit();
