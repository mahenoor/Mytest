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
        if(empty($studentName) || !preg_match("/^['a-z']{3,9}$/",$studentName) {
            $studentNameError = "***please enter student name"; 
        } else {
            $this->$studentName = $studentName;
        }
    }
    public function department($department)
    {
        if (empty($department)) {
            $departmentError = "***please enter department";
        } else {
            $this->$department = $department;
        }
    }
    public function gender($gender)
    {
        if (empty($gender)) {
            $genderError = "***please enter gender";
        } else {
            $this->$gender = $gender;
        }
    }
    public function roll_no($roll_no)
    {
        if (empty($Roll_no) || !preg_match("/^[a-z0-9]{10}$/", $Roll_no)) {
            $Roll_noError = "***roll_no can't be empty,must not include capital letters and 
            must be of only 10 digits";
        } else {
            $this->$roll_no = $roll_no;
        }
    }
    public function subject1($subject1)
    {
        if (empty($subject1) || !preg_match("/^[0-9]{1,3}$/",  $subject1)) {
            $subject1Error = "***subject1 can't be empty,must include only digits and with maximum marks being 100";
        } else {
            $this->$subject1 = $subject1;
        }
    }
    public function subject2($subject2)
    {
        if (empty($subject2) || !preg_match("/^[0-9]{1,3}$/",  $subject2)) {
            $subject2Error = "***subject2 can't be empty,must include only digits and with maximum marks being 100";
        } else { 
            $this->$subject2 = $subject2;
        }
    }
    public function subject3($subject3)
    {
        if (empty($subject3) || !preg_match("/^[0-9]{1,3}$/",  $subject3)) {
            $subject3Error = "***subject1 can't be empty,must include only digits and with maximum marks being 100";
        } else {
            $this->$subject3 = $subject3;
        }
    }
    public function display()
    {
        require 'form.php';
    }







    



}