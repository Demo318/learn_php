<?php

require "functions.php";

require "Database.php";

require "Response.php";

require "router.php";






/* 
// Old Database Connection from Section 2

// Connect to the database, and execute a query.
$config = require('config.php');

$db = new Database($config['database']);
// !!
// never accept user input into a SQL query string.
// !!
$id = $_GET['id'];
$query = "select * from posts where id = :id";

$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);
*/



// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }