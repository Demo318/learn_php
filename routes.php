<?php

return [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes/index.php',
    '/notes/create' => 'controllers/notes/create.php',
    '/note' => 'controllers/notes/show.php',
    '/contact' => 'controllers/contact.php',
    '/mission' => 'controllers/mission.php',
];

/*

Naming convention in routes. Useful to follow same guidelines,
especially when collaborating with others.

"notes" is a page to view all of the notes.
"note" is a page to view  a single note.
--eventually would use "/notes/:note" where "note" will be a variable to get a specific note.
"notes/create" a form to create a new note. Could do "/create-note", but much better to
use conventions to keep it all organized. Stick to the pattern. Applies to any 'resource,'
i.e. photos, users, posts, or in this case notes.

*/