<?php
function validate($studentRecordValidataion) 
{
    if(!isset($_POST['studentName'])) {
        $studentNameError = "***please enter student name"; 
    } else {
        $studentName = $studentRecordValidataion['studentName'];
    }
    if (!isset($_POST['department'])) {
        $departmentError = "***please enter department";
    } else {
        $department = $studentRecordValidataion['department'];
    }
    if (!isset($_POST['gender'])) {
        $genderError = "***please enter gender";
    } else {
        $gender = $studentRecordValidataion['gender'];
    }
    if(!isset($_POST['Roll_no'])) {
        $Roll_noError = "***please enter roll_no";
    } else {
        $Roll_no = $studentRecordValidataion['Roll_no'];
    }
    if(!isset($_POST['subject1'])) {
        $Roll_noError = "***please enter marks of subject1";
    } else {
        $Roll_no = $studentRecordValidataion['subject1'];
    }
    if(!isset($_POST['subject2'])) {
        $Roll_noError = "***please enter marks of subject2";
    } else {
        $Roll_no = $studentRecordValidataion['subject2'];
    }
    if(!isset($_POST['subject3'])) {
        $Roll_noError = "***please enter marks of subject3";
    } else {
        $Roll_no = $studentRecordValidataion['subject3'];
    }
    $total = $_POST['subject1'] + $_POST['subject2'] + $_POST['subject3'];
    $percentage = (($_POST['subject1'] + $_POST['subject2'] + $_POST['subject3']) / 3);
    $errorMessageArray = array();
    if (empty($studentName) || !preg_match("/^['a-zA-Z']*$/",$studentName)) {
    $studentNameError = "***please enter name";
    $errorMessageArray['studentName'] = $studentNameError; 
}
if (empty($department)) {
    $departmentError = "***please enter department";
    $errorMessageArray['department'] = $departmentError;
} 
if (empty($gender)) {
    $genderError = "***please enter gender";
    $errorMessageArray['gender'] = $genderError;
}  
if (empty($Roll_no) || !preg_match("/^[a-z0-9]*$/", $Roll_no)) {
    $Roll_noError = "***roll_no can't be empty and must not include capital letters";
    $errorMessageArray['Roll_no'] = $Roll_noError;
} 
if (empty($subject1) || !preg_match("/[0-9]*$/",  $subject1)) {
    $subject1Error = "***subject1 can't be empty and must include only digits";
    $errorMessageArray['subject1'] =  $subject1Error;
} 
if (empty($subject2) || !preg_match("/[0-9]*$/",  $subject2)) {
    $subject2Error = "***subject2 can't be empty and must include only digits";
    $errorMessageArray['subject2'] = $subject2Error;
}
if (empty($subject3) || !preg_match("/[0-9]*$/",  $subject3)) {
    $subject3Error = "***subject3 can't be empty and must include only digits";
    $errorMessageArray['subject3'] = $subject3Error;
}
$displaysErrorMsg = array("message" => $errorMessageArray);
return $displaysErrorMsg;
}
?>
