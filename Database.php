<?php

class Database {
    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}

// Two colons: Scope resolution operator. ::
// Provides access to static or constant that's defined on a class.

// connect to MySQL database. PDO = PHP Data Objects
// don't write this code that often because you're usually
// using a library.
