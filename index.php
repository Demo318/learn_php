<?php

require "functions.php";

// require "router.php";

// connect to MySQL database. PDO = PHP Data Objects
// don't write this code that often because you're usually
// using a library.

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}