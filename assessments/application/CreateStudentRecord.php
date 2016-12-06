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
    public function validateStudentName($studentName)
    {
        if (empty($studentName) || !preg_match("/^['a-z']{3,9}$/",$studentName)) {
            echo "***please enter student name"; 
        }
    }
    public function validateDepartment($department)
    {
        if (empty($department)) {
            echo "***please enter department";
        }
    }
    public function validateGender($gender)
    {
        if (empty($gender)) {
            echo "***please enter gender";
        }
    }
    public function validateRoll_no($roll_no)
    {
        if (empty($Roll_no) || !preg_match("/^[a-z0-9]{10}$/", $Roll_no)) {
            echo "***roll_no can't be empty,must not include capital letters and must be of only 10 digits";
        }
    }
    public function validateSubject1($subject1)
    {
        if (empty($subject1) || !preg_match("/^[0-9]{1,3}$/",  $subject1)) {
            echo "***subject1 can't be empty,must include only digits and with maximum marks being 100";
        }
    }
    public function validateSubject2($subject2)
    {
        if (empty($subject2) || !preg_match("/^[0-9]{1,3}$/",  $subject2)) {
            echo "***subject2 can't be empty,must include only digits and with maximum marks being 100";
        }
    }
    public function validateSubject2($subject2)
    {
        if (empty($subject2) || !preg_match("/^[0-9]{1,3}$/",  $subject2)) {
            echo "***subject2 can't be empty,must include only digits and with maximum marks being 100";
        }
    }
    public function display()
    {
        require 'form.php';
    }
    public function display()
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
    $studentRecord = new StudentRecord();
echo  $studentRecord->display();
echo  $studentRecord->username($_POST['username']);
echo $studentRecord->email($_POST['user_email']);
echo $studentRecord->password($_POST['user_password']);
echo $studentRecord->cpassword($_POST['user_confirmation_password']);
echo $studentRecord->gender($_POST['gender']);
echo $studentRecord->validate1($_POST['user_password']);
echo $studentRecord->validate2($_POST['user_confirmation_password']);
echo $studentRecord->validate3($_POST['user_password'], $_POST['user_confirmation_password']);
echo $studentRecord->college($_POST['college']);
echo $studentRecord->display1();