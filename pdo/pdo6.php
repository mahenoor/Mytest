<?php
require 'bootstrap.php';
require 'Task.php';
$pdo = connection::make();
$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('today');
$tasks = array_map(function ($task) {
	return new Task();
}, $tasks);
die(var_dump($tasks));
require 'linkpdo.php';
?> 
