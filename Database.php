<?php

class Database
{
    public $connection;


    public function __construct($config, $username = 'brettowns', $password = '13011brett')
    {


        $dsn = 'mysql:' . (http_build_query($config, null,";" ));




        $this->connection = new PDO($dsn, $username, $password,  [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($myQuery)
    {


        $statement = $this->connection->prepare("{$myQuery}");

        $statement->execute();

        return $statement;
    }
}

