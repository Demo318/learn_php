<?php

class Database {
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'root');
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}

// connect to MySQL database. PDO = PHP Data Objects
// don't write this code that often because you're usually
// using a library.
