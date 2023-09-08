<?php

class Database {
    public $connection;

    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}

// Two colons: Scope resolution operator. ::
// Provides access to static or constant that's defined on a class.

// connect to MySQL database. PDO = PHP Data Objects
// don't write this code that often because you're usually
// using a library.
