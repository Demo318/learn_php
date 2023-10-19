<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/functions.php";

spl_autoload_register(function ($class) {
    // Core\Database
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

$router = new \Core\Router();

$routes = require(base_path('routes.php'));

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);






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