<?php

require 'Task.php';

$host = '127.0.0.1';
$port = 3333;
$db   = 'mytodo';
$user = 'root';
$password = 'password';

$dsn = "mysql:host=$host;dbname=$db;port=$port";


try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('SELECT * FROM todos');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';