<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertName($name)
    {
        $statement = $this->pdo->prepare(
            "INSERT INTO names (name) VALUES ('{$name}')"
        );
        return $statement->execute();
    }
}