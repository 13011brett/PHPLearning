<?php

class Database
{
    public $connection;

    public $statement;


    public function __construct($config, $username = 'brettowns', $password = '13011brett')
    {


        $dsn = 'mysql:' . (http_build_query($config, null,";" ));




        $this->connection = new PDO($dsn, $username, $password,  [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($myQuery, $params = [])
    {


        $this->statement = $this->connection->prepare("{$myQuery}");

        $this->statement->execute($params);

        return $this;
    }

    public function fetch()
    {
        return $this->statement->fetch();
    }
    public function fetchAll(){
        return $this->statement->fetchAll();
    }
}



