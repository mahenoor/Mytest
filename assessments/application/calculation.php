<?php
function total($subject1, $subject2, $subject3) 
{
	$values = array($subject1 , $subject2 ,$subject3);
	$total = array_sum($values);
	return $total;
}
function percentage($subject1, $subject2, $subject3)
{
	$values = array($subject1 , $subject2 ,$subject3);
	$percent = array_sum($values) / count($values);
	return $percent;
}
?>