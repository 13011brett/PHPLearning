<?php

class Database
{

    public $connection;

    public function __construct()
    {

        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'brettowns', '13011brett');
    }

    public function query($myQuery)
    {


        $statement = $this->connection->prepare("{$myQuery}");

        $statement->execute();

        return $statement;
    }
}

