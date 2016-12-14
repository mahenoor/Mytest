<?php
class Calculation{
	public function Total($Physics, $Chemistry, $Maths) 
	{
		$values = array($Physics, $Chemistry, $Maths);
		$Total = array_sum($values);
		return $Total;
	}
	public function Percentage($Physics, $Chemistry, $Maths)
	{
		$values = array($Physics, $Chemistry, $Maths);
		$Percentage = array_sum($values) / count($values);
		return $Percentage;
	}
	public function studentAttended($startDate, $endDate, $studentLeave)
	{
		$values = array($startDate, $endDate, $studentLeave);
		$studentAttended = array_sum($values);
		return $studentAttended;
	}
}
?>

