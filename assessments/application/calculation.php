<?php
//a class that calculates total and percentage secured by the students.
class Calculation{
	public function total($subject1, $subject2, $subject3) 
	{
		$values = array($subject1, $subject2, $subject3);
		$total = array_sum($values);
		return $total;
	}
	public function percentage($subject1, $subject2, $subject3)
	{
		$values = array($subject1, $subject2, $subject3);
		$percentage = array_sum($values) / count($values);
		return $percentage;
	}
}
?>

