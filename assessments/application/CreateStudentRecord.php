<?php
class StudentRecord
{
    public $studentName;
    public $department;
    public $gender;
    public $roll_no;
    public $subject1;
    public $subject2;
    public $subject3;
    public $studentNameError;
    public $departmentError;  
    public $genderError;
    public $Roll_noError;
    public $subject1Error;
    public $subject2Error;
    public $subject3Error;
    public function studentName($studentName)
    {
        $this->$studentName = $studentName;
    }
    public function department($department)
    {
        $this->$department = $department;
    }
    public function gender($gender)
    {
        $this->$gender = $gender;
    }
    public function roll_no($roll_no)
    {
        $this->$roll_no = $roll_no;
    }
    public function subject1($subject1)
    {
        $this->$subject1 = $subject1;
    }
    public function subject2($subject2)
    {
        $this->$subject2 = $subject2;
    }
    public function subject3($subject3)
    {
        $this->$subject3 = $subject3;
    }
    



}