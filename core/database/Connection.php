<?php


class Connection
{
    public static function make($config)
    {
        $dsn = 'mysql:host='.$config['host'];
        $dsn .=';dbname='.$config['name'];
        $dsn .=';port='.$config['port'];

        try {
            return new PDO(
                $dsn,
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}