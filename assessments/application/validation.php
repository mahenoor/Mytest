<?php
class Validation 
{
    public function validate($studentRecord) 
    {
        $resultOfValidation = true;
        $errorMessageArray = array();
        if (empty($studentRecord['studentName']) || !preg_match("/^['a-z']{3,9}$/",$studentRecord['studentName'])) {
            $studentNameError = "***please enter name";
            $errorMessageArray['studentName'] = $studentNameError; 
            $resultOfValidation = false;
        }
        if (empty($studentRecord['department'])) {
            $departmentError = "***please enter department";
            $errorMessageArray['department'] = $departmentError;
            $resultOfValidation = false;
        } 
        if (empty($studentRecord['gender'])) {
            $genderError = "***please enter gender";
            $errorMessageArray['gender'] = $genderError;
            $resultOfValidation = false;
        }  
        if (empty($studentRecord['Roll_no']) || !preg_match("/^[a-z0-9]{10}$/", $studentRecord['Roll_no'])) {
            $Roll_noError = "***roll_no can't be empty,must not include capital letters and 
            must be of only 10 digits";
            $errorMessageArray['Roll_no'] = $Roll_noError;
            $resultOfValidation = false;
        } 
        if (empty($studentRecord['subject1']) || !preg_match("/^[0-9]{1,3}$/",  $studentRecord['subject1'])) {
            $subject1Error = "***subject1 can't be empty,must include only digits and with maximum marks being 100";
            $errorMessageArray['subject1'] =  $subject1Error;
            $resultOfValidation = false;
        } 
        if (empty($studentRecord['subject2']) || !preg_match("/^[0-9]{1,3}$/",  $studentRecord['subject2'])) {
            $subject2Error = "***subject2 can't be empty and must include only 
            digits and with maximum marks being 100";
            $errorMessageArray['subject2'] = $subject2Error;
            $resultOfValidation = false;
        }
        if (empty($studentRecord['subject3']) || !preg_match("/^[0-9]{1,3}$/",  $studentRecord['subject3'])) {
            $subject3Error = "***subject3 can't be empty and must include only
             digits and with maximum marks being 100";
            $errorMessageArray['subject3'] = $subject3Error;
            $resultOfValidation = false;
        }
        $validationArray = array("status" => $resultOfValidation, "message" => $errorMessageArray);
        return $validationArray;
    }
}
?>


