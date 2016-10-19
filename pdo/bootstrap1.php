<?php
$config = require 'config.php';
require 'connection.php';
require 'QueryBuilder.php';
return new QueryBuilder(Connection::make($config['database']));
?> 