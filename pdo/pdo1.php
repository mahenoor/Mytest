<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=today', 'root', 'compass');
    echo "connected";
}
catch (PDOexception $e) {
    die($e->getMessage());
}
$statement = $pdo->prepare('select * from student');
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($results[1]->usn);
require 'linkpdo.php';
?> 