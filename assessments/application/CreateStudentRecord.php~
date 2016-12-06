<?php
error_reporting(0);
class StudentRecord
{
    public $studentName;
    public $department;
    public $gender;
    public $Roll_no;
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
        $this->studentName = $studentName;
    }
    public function department($department)
    {
        $this->department = $department;
    }
    public function gender($gender)
    {
        $this->gender = $gender;
    }
    public function roll_no($Roll_no)
    {
        $this->Roll_no = $Roll_no;
    }
    public function subject1($subject1)
    {
        $this->subject1 = $subject1;
    }
    public function subject2($subject2)
    {
        $this->subject2 = $subject2;
    }
    public function subject3($subject3)
    {
        $this->subject3 = $subject3;
    }
    public function validateStudentName($studentName)
    {
        if (!preg_match("/^['a-z']{3,9}$/",$studentName)) {
            $studentNameError = "***please enter student name"; 
        }
    }
    public function validateDepartment($department)
    {
        if (empty($department)) {
            $departmentError = "***please enter department";
        }
    }
    public function validateGender($gender)
    {
        if (empty($gender)) {
            $genderError = "***please enter gender";
        }
    }
    public function validateRoll_no($Roll_no)
    {
        if (!preg_match("/^[a-z0-9]{10}$/", $Roll_no)) {
            $Roll_noError = "***roll_no can't be empty,must not include capital letters and 
            must be of only 10 digits";
        }
    }
    public function validateSubject1($subject1)
    {
        if ( !preg_match("/^[0-9]{1,3}$/",  $subject1)) {
            $subject1Error = "***subject1 can't be empty,must include only digits and with maximum marks being 100";
        }
    }
    public function validateSubject2($subject2)
    {
        if ( !preg_match("/^[0-9]{1,3}$/",  $subject2)) {
            $subject2Error = "***subject2 can't be empty,must include only digits and with maximum marks being 100";
        }
    }
    public function validateSubject3($subject3)
    {
        if ( !preg_match("/^[0-9]{1,3}$/",  $subject3)) {
           $subject3Error = "***subject3 can't be empty,must include only digits and with maximum marks being 100";
        }
    }
    public function connectdb()
    {
        require 'config.php';
    }
    public function display()
    {
        require 'form.php';
    }
    public function display1()
    {
        echo "the information is:";
        echo "the studentName is:" . $this->studentName;
        echo "the department is:" . $this->department;
        echo "the gender is:" . $this->gender;
        echo "the roll_no is:" . $this->roll_no;
        echo "the subject1 is:" . $this->subject1;
        echo "the subject2 is:" . $this->subject2;
        echo "the subject3 is:" . $this->subject3;
    }
}
$studentRecord = new StudentRecord();
echo $studentRecord->connectdb();
echo $studentRecord->display();
echo $studentRecord->studentName($_POST['studentName']);
echo $studentRecord->department($_POST['department']);
echo $studentRecord->gender($_POST['gender']);
echo $studentRecord->roll_no($_POST['Roll_no']);
echo $studentRecord->subject1($_POST['subject1']);
echo $studentRecord->subject2($_POST['subject2']);
echo $studentRecord->subject3($_POST['subject3']);
echo $studentRecord->validateStudentName($_POST['studentName']);
echo $studentRecord->validateDepartment($_POST['department']);
echo $studentRecord->validateGender($_POST['gender']);
echo $studentRecord->validateRoll_no($_POST['Roll_no']);
echo $studentRecord->validateSubject1($_POST['subject1']);
echo $studentRecord->validateSubject2($_POST['subject2']);
echo $studentRecord->validateSubject3($_POST['subject3']);
echo $studentRecord->display1();
?>