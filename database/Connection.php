<?php

class Connection
{
    public static function make()
    {
        $host = '127.0.0.1';
        $port = 3333;
        $db   = 'mytodo';
        $user = 'root';
        $password = 'password';
    
        $dsn = "mysql:host=$host;dbname=$db;port=$port";
    
    
        try {
            return new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}