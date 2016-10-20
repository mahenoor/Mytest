<?php
require 'connection.php';
require 'QueryBuilder.php';
return new QueryBuilder(Connection::make());
?> 
