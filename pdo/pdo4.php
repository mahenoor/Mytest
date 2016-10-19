<?php
require 'bootstrap.php';
require 'Task.php';
$pdo   = connection::make();
$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('today');
die(var_dump($tasks));
?> 