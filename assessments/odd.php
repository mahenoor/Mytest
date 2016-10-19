<?php
$numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
foreach($numbers as $number) {
	if(($number%2)!=0) {
		echo $number.',';
	}
}
?>