<?php
function validate($studentRecord) 
{
    if (!isset($_POST['studentName'])) {
        $studentNameError = "***please enter student name"; 
    } else {
        $studentName = $studentRecord['studentName'];
    }
    if (!isset($_POST['department'])) {
        $departmentError = "***please enter department";
    } else {
        $department = $studentRecord['department'];
    }
    if (!isset($_POST['gender'])) {
        $genderError = "***please enter gender";
    } else {
        $gender = $studentRecord['gender'];
    }
    if (!isset($_POST['Roll_no'])) {
        $Roll_noError = "***roll_no can't be empty,must not include capital letters and must be of only 10 digits";
    } else {
        $Roll_no = $studentRecord['Roll_no'];
    }
    if (!isset($_POST['subject1'])) {
        $subject1Error = "***subject1 can't be empty,must include only digits and with maximum marks being 100";
    } else {
        $subject1 = $studentRecord['subject1'];
    }
    if (!isset($_POST['subject2'])) {
        $subject2Error = "***subject1 can't be empty,must include only digits and with maximum marks being 100";
    } else {
        $subject2 = $studentRecord['subject2'];
    }
    if (!isset($_POST['subject3'])) {
        $subject3Error = "***subject1 can't be empty,must include only digits and with maximum marks being 100";
    } else {
        $subject3 = $studentRecord['subject3'];
    }
    $resultOfValidation = true;
    $errorMessageArray = array();
    if (empty($studentName) || !preg_match("/^['a-z']{3,9}$/",$studentName)) {
    $studentNameError = "***please enter name";
    $errorMessageArray['studentName'] = $studentNameError; 
    $resultOfValidation = false;
    }
    if (empty($department)) {
    $departmentError = "***please enter department";
    $errorMessageArray['department'] = $departmentError;
    $resultOfValidation = false;
    } 
    if (empty($gender)) {
    $genderError = "***please enter gender";
    $errorMessageArray['gender'] = $genderError;
    $resultOfValidation = false;
    }  
    if (empty($Roll_no) || !preg_match("/^[a-z0-9]{10}$/", $Roll_no)) {
    $Roll_noError = "***roll_no can't be empty,must not include capital letters and must be of only 10 digits";
    $errorMessageArray['Roll_no'] = $Roll_noError;
    $resultOfValidation = false;
    } 
    if (empty($subject1) || !preg_match("/^[0-9]{1,3}$/",  $subject1)) {
    $subject1Error = "***subject1 can't be empty,must include only digits and with maximum marks being 100";
    $errorMessageArray['subject1'] =  $subject1Error;
    $resultOfValidation = false;
    } 
    if (empty($subject2) || !preg_match("/^[0-9]{1,3}$/",  $subject2)) {
    $subject2Error = "***subject2 can't be empty and must include only digits and with maximum marks being 100";
    $errorMessageArray['subject2'] = $subject2Error;
    $resultOfValidation = false;
    }
    if (empty($subject3) || !preg_match("/^[0-9]{1,3}$/",  $subject3)) {
    $subject3Error = "***subject3 can't be empty and must include only digits and with maximum marks being 100";
    $errorMessageArray['subject3'] = $subject3Error;
    $resultOfValidation = false;
    }
    $response = array("status"=> $resultOfValidation, "message"=> $errorMessageArray);
    return $response;
}
?>


