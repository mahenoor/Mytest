<?php
function total($subject1, $subject2, $subject3) 
{
	$total = $subject1 + $subject2 + $subject3;
	return $total;
}
function percentage($subject1, $subject2, $subject3) 
{
	$percentage = (($subject1 + $subject2 + $subject3) / 3); 
 	return $percentage;
}
?>