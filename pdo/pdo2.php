<?php
require 'Task.php';
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=today', 'root', 'compass');
    echo "connected";
}
catch (PDOexception $e) {
    die($e->getMessage());
}
$statement = $pdo->prepare('select * from today');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
var_dump($tasks[0]->foobar());
require 'linkpdo.php';
?> 