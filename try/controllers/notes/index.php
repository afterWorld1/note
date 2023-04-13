<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$note = $db->query('SELECT * FROM note')->get();

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'note' => $note,
]);
