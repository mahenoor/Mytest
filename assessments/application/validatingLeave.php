<?php
class ValidatingLeave
{
    public function validate($studentRecord)
	{
        $resultOfValidation = true;
        $errorMessageArray = array();
        if (empty($studentRecord['startDate']) || !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-
            (0[1-9]|[1-2][0-9]|3[0-1])$/",$studentRecord['startDate'])) {
            $startDateError = "***please enter start date";
            $errorMessageArray['startDate'] = $startDateError; 
            $resultOfValidation = false;
        }
        if (empty($studentRecord['endDate']) || !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-
            (0[1-9]|[1-2][0-9]|3[0-1])$/",$studentRecord['endDate'])) {
            $endDateError = "***please enter end date";
            $errorMessageArray['endDate'] = $endDateError; 
            $resultOfValidation = false;
        }
        $validationArray = array("status" => $resultOfValidation, "message" => $errorMessageArray);
        return $validationArray;
	}
}
?>