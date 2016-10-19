<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=today', 'root', 'compass');
    echo "connected";
}
catch (PDOException $e) {
    die('could not connect');
}
$statement = $pdo->prepare('select * from today');
$statement->execute();
var_dump($statement->fetchAll(PDO::FETCH_OBJ));
?>  