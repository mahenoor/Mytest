<?php
$person = ['age'=>'31',
		'color'=>'brown',
		'job'=>'wd'];
$person['name'] = 'jai';
unset($person['age']);
require 'linked.php';
?>