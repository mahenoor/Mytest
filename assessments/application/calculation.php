<?php
class Calculation{
	public $subject1;
	public $subject2;
	public $subject3;
	public function total($subject1, $subject2, $subject3) 
	{
		$this->subject1 = $subject1;
		$this->subject2 = $subject2;
		$this->subject3 = $subject3;
		$total = ($this->subject1 + $this->subject2 + $this->subject3);
		return $total;
	}
	public function percentage($subject1, $subject2, $subject3)
	{
		$this->subject1 = $subject1;
		$this->subject2 = $subject2;
		$this->subject3 = $subject3;
		$percentage = (($this->subject1 + $this->subject2 + $this->subject3) / 3);
		return $percentage;
	}
}
?>

