<?php

use Core\Database;
use Core\App;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 3;

$note = $db->query('select * from notes where id = :id', [ 
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

// validate the form (no content, too much content)
$errors = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

// if (! empty($errors)) {
//     return view('notes/create.view.php', [
//                 'heading' => 'Create Note',
//                 'errors' => $errors,
//     ]);
// }

if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

// if no validation errors, update the record in the notes table

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

// redirect user

header('location: /notes');

die();