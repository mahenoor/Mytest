<?php
//a class that calculates total and percentage secured by the students.
class Calculation{
	public function total($Physics, $Chemistry, $Maths) 
	{
		$values = array($Physics, $Chemistry, $Maths);
		$total = array_sum($values);
		return $total;
	}
	public function percentage($Physics, $Chemistry, $Maths)
	{
		$values = array($Physics, $Chemistry, $Maths);
		$percentage = array_sum($values) / count($values);
		return $percentage;
	}
}
?>

