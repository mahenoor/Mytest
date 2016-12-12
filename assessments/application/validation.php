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
        if (empty($studentRecord['Department'])) {
            $departmentError = "***please enter department";
            $errorMessageArray['Department'] = $departmentError;
            $resultOfValidation = false;
        } 
        if (empty($studentRecord['Gender'])) {
            $genderError = "***please enter Gender";
            $errorMessageArray['Gender'] = $genderError;
            $resultOfValidation = false;
        }  
        if (empty($studentRecord['Roll_no']) || !preg_match("/^[a-z0-9]{10}$/", $studentRecord['Roll_no'])) {
            $Roll_noError = "***roll_no can't be empty,must not include capital letters and 
            must be of only 10 digits";
            $errorMessageArray['Roll_no'] = $Roll_noError;
            $resultOfValidation = false;
        } 
        if (empty($studentRecord['Physics']) || !preg_match("/^[0-9]{1,3}$/",  $studentRecord['Physics'])) {
            $PhysicsError = "***Physics can't be empty,must include only digits and with maximum marks being 100";
            $errorMessageArray['Physics'] =  $PhysicsError;
            $resultOfValidation = false;
        } 
        if (empty($studentRecord['Chemistry']) || !preg_match("/^[0-9]{1,3}$/",  $studentRecord['Chemistry'])) {
            $ChemistryError = "***Chemistry can't be empty and must include only 
            digits and with maximum marks being 100";
            $errorMessageArray['Chemistry'] = $ChemistryError;
            $resultOfValidation = false;
        }
        if (empty($studentRecord['Maths']) || !preg_match("/^[0-9]{1,3}$/",  $studentRecord['Maths'])) {
            $MathsError = "***Maths can't be empty and must include only
             digits and with maximum marks being 100";
            $errorMessageArray['Maths'] = $MathsError;
            $resultOfValidation = false;
        }
        $validationArray = array("status" => $resultOfValidation, "message" => $errorMessageArray);
        return $validationArray;
    }
}
?>


