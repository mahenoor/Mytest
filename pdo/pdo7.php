<?php
$database = require 'bootstrap1.php';
$tasks = $database->selectAll('today');
?>