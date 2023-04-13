<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('SELECT * FROM note WHERE noteID = :id', [
    ':id' => $_GET['noteID']
])->findOrFail();

authorize($note['userID'] === $currentUserId);

view('notes/show.view.php', [
    'heading' => 'Notes',
    'note' => $note
]);
